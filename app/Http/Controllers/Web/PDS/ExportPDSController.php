<?php

namespace App\Http\Controllers\Web\PDS;

use App\Http\Controllers\Controller;
use App\Models\PersonalInformation;
use Dompdf\Dompdf;
use Dompdf\Options;
use Illuminate\Http\Request;

class ExportPDSController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request, string $id)
    {

        $personalInformation = PersonalInformation::find($id);


        $html = view('pds.export-pds', compact('personalInformation'))->render();

        // Instantiate dompdf
        $options = new Options();
        $options->set('isHtml5ParserEnabled', true);
        $dompdf = new Dompdf($options);

        // Load HTML content
        $dompdf->loadHtml($html);

        // (Optional) Set paper size and orientation
        $dompdf->setPaper([0, 0, 612, 936], 'portrait');

        // Render the HTML as PDF
        $dompdf->render();

        // Output the generated PDF
        return $dompdf->stream('PersonalDataSheet.pdf', ['Attachment' => 0]);
    }
}
