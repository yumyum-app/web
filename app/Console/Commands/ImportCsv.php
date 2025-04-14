<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\Meal;

class ImportCsv extends Command
{
    protected $signature = 'import:csv {file : Lokasi file CSV yang akan diimport}';
    protected $description = 'Import CSV ke dalam tabel meals hanya dengan beberapa atribut yang diperlukan.';

    public function __construct()
    {
        parent::__construct();
    }
    public function handle()
{
    // Mendapatkan path file dari argument command
    $filePath = $this->argument('file');

    if (!file_exists($filePath)) {
        $this->error("File CSV tidak ditemukan: {$filePath}");
        return 1;
    }

    // Membuka file CSV, gunakan fgetcsv untuk membaca file
    if (($handle = fopen($filePath, 'r')) !== false) {
        // Baca header CSV
        $header = fgetcsv($handle, 1000, ',');
        $this->info("Header CSV: " . implode(', ', $header));

        // Mapping antar kolom CSV dan kolom di tabel meals
        $mapping = [];
        foreach ($header as $index => $column) {
            $col = strtolower(trim($column));
            if ($col === 'recipe_id') {
                $mapping['dataset_id'] = $index;
            } elseif ($col === 'recipe_name') {
                $mapping['name'] = $index;
            } elseif ($col === 'category') {
                $mapping['category'] = $index;
            } elseif ($col === 'image_url') {
                $mapping['image_url'] = $index;
            } elseif ($col === 'ingredients') {
                $mapping['ingridients'] = $index; // Field di database adalah ingridients
            }
        }

        $expectedFields = ['dataset_id', 'name', 'category', 'image_url', 'ingridients'];
        foreach ($expectedFields as $field) {
            if (!isset($mapping[$field])) {
                $this->error("Kolom yang diperlukan '$field' tidak ditemukan pada file CSV.");
                return 1;
            }
        }

        $this->info("Mulai import data CSV ke database...");
        $rowsInserted = 0;
        $rowsSkipped = 0;

        while (($data = fgetcsv($handle, 1000, ',')) !== false) {
            $mealData = [
                'dataset_id'  => isset($data[$mapping['dataset_id']]) ? $data[$mapping['dataset_id']] : null,
                'name'        => isset($data[$mapping['name']]) ? $data[$mapping['name']] : null,
                'category'    => isset($data[$mapping['category']]) ? $data[$mapping['category']] : null,
                'image_url'   => isset($data[$mapping['image_url']]) ? $data[$mapping['image_url']] : null,
                'ingridients' => isset($data[$mapping['ingridients']]) ? $data[$mapping['ingridients']] : null,
            ];

            // Skip the row if any required field is missing
            if (empty($mealData['dataset_id']) || empty($mealData['name']) || empty($mealData['category']) || empty($mealData['image_url']) || empty($mealData['ingridients'])) {
                $this->warn("Skipping row due to incomplete data: " . implode(', ', $data));
                $rowsSkipped++;
                continue;
            }

            Meal::create($mealData);
            $rowsInserted++;
        }

        fclose($handle);
        $this->info("Import selesai. Total record yang diimport: {$rowsInserted}. Total record yang dilewati: {$rowsSkipped}");
        return 0;
    } else {
        $this->error("Tidak dapat membuka file: {$filePath}");
        return 1;
    }
}
}