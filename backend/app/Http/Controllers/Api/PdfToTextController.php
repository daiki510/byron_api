<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Spatie\PdfToText\Pdf;

class PdfToTextController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return String
     */
    public function convert()
    {
        $text = Pdf::getText('storage/test.pdf', '/usr/bin/pdftotext');
        return $this->generateResponse($text, 200);
    }
}
