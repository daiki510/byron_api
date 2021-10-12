<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Spatie\PdfToText\Pdf;

class PdfToTextCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'command:name';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        echo(Pdf::getText('storage/test1.pdf', null, ['f 1']));
        // $pdf_path = storage_path('storage/test.pdf');
        // $text = \Spatie\PdfToText\Pdf::getText($pdf_path, '/usr/bin/pdftotext');
        // var_dump($text);
    }
}
