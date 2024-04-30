<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>

<head>
    <meta http-equiv="Content-Type" content="charset=utf-8" />
    <title>Personal Data Sheet</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            font-family: Helvetica;
        }

        body {
            margin: 10px;
        }

        #pds-table {
            width: 100%;
            margin: 0;
            padding: 0;
            border-collapse: collapse;
        }

        #pds-table td,
        tr {
            font-size: 8px;
            border-color: #000;
            height: 20px;
            padding-left: 10px;
            padding-right: 10px;
            padding-top: 5px;
            /* padding-bottom: 5px; */

            /* For Visual Purposes */
        }

        .page_break {
            page-break-before: always;
        }


        /* #pds-table tbody {
            border: 1px solid #000;
        }

        #pds-table tbody td {
            border: 1px solid #000;
        } */

        #pds-table .separator {
            font-size: 12px;
            font-style: italic;
            font-weight: 600;
            background-color: #7e7e7e;
            border-top-width: 2px !important;
            border-bottom-width: 2px !important;
        }

        #pds-table td.s-label {
            background-color: #dddddd;
            width: 20%;
        }

        #pds-table td .count {
            display: inline-block;
            width: 1.32em;
            text-align: center;
        }

        .table-body.question-block td {
            font-size: 13px !important;
        }

        .table-body.question-block tr td:first-child {
            border-bottom-width: 0px !important;
            border-top-width: 0px !important;
        }

        .table-body.question-block tr td:not(:first-child) {
            border-width: 0px !important;
        }

        .table-body.question-block tr td:nth-child(2) {
            padding-left: 15px;
        }

        @media print {}
    </style>
</head>

<body>
    <div class="table-responsive p-3">
        <form action="">
            <table id="pds-table">

                <tbody class="table-header">
                    <tr>
                        <td colspan="12" class="h5" style="padding:0px"><i><b>CS Form No.
                                    212</b></i></td>
                    </tr>
                    <tr>
                        <td colspan="12" class="align-top" style="max-height: 12px;padding:0px">
                            <i><b>Revised 2017</b></i>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="12" class="text-center" align="center">
                            <h1 style="font-size: 30px"><b>PERSONAL DATA SHEET</b></h1>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="12" style="padding:0px"><i><b>WARNING: Any misrepresentation main in the Personal
                                    Data Sheet and the
                                    Work
                                    Experience Sheet shall cause the filing of administative/criminal case/s against the
                                    person
                                    concerned.</b></i></td>
                    </tr>
                    <tr>
                        <td colspan="12" style="padding:0px"><i><b>READ THE ATTACHED GUIDE TO FILLING OUT THE PERSONAL
                                    DATA SHEET (PDS)
                                    BEFORE
                                    ACCOMPLISHING THE PDS FORM</b></i></td>
                    </tr>
                    <tr>
                        <td colspan="9" style="padding:0px">Print legibly. Tick appropriate boxes (✔ )
                            and useseperate sheet if necessary. Indicate N/A if not
                            applicable. <b>DO NOT ABBREVIATE.</b></td>
                        <td colspan="1"
                            style="border:1px solid#000b;background:#7e7e7e;width:8%;padding:0px;color:white">
                            <small>1. CS ID
                                No.</small>
                        </td>
                        <td colspan="3" class="text-right" style="border:1px solid #000;width:20%;padding:0px">
                            <small>(Do not
                                fill up.
                                For CSC use only)</small>
                        </td>
                    </tr>
                </tbody>

                <tbody class="table-body" style="border: 1px solid #000;">
                    <tr>
                        <td colspan="13" class="text-white separator" style="border: 1px solid #000;color: #fff;">I.
                            PERSONAL INFORMATION</td>
                    </tr>
                    <tr>
                        <td colspan="1" class="s-label border-bottom-0" style="border: 1px solid #000;">
                            <span class="count">2.</span> SURNAME
                        </td>
                        <td colspan="12" style="border: 1px solid #000;padding-left:10px">
                            {{ $personalInformation->surname }}</td>
                    </tr>
                    <tr>
                        <td colspan="1" class="s-label border-0" style="border: 1px solid #000;"><span
                                class="count"></span> FIRST NAME</td>
                        <td colspan="9" style="border: 1px solid #000;padding-left:10px">
                            {{ $personalInformation->first_name }}</td>
                        <td colspan="1" style="border: 1px solid #000;padding-left:10px" class="align-top s-label">
                            <small>NAME EXTENSION
                                (JR.,SR)</small>
                        </td>
                        <td colspan="2" style="padding-left:10px">
                            {{ $personalInformation->suffix }}
                        </td>
                    </tr>
                    <tr>
                        <td colspan="1" style="border: 1px solid #000;" class="s-label border-0"><span
                                class="count"></span> MIDDLE NAME</td>
                        <td colspan="12" style="border: 1px solid #000;padding-left:10px">
                            {{ $personalInformation->middle_name }}</td>
                    </tr>
                    <tr>
                        <td colspan="1" style="border: 1px solid #000;" class="s-label border-bottom-0">
                            <span class="count">3.</span> DATE OF BIRTH<br>
                            <span class="count"></span> (mm/dd/yyyy)
                        </td>
                        <td colspan="5" style="border: 1px solid #000;padding-left:10px">
                            {{ date('m/d/Y', strtotime($personalInformation->date_of_birth)) }}
                        </td>
                        <td colspan="3" style="border: 1px solid #000;" class="s-label align-top border-bottom-0">
                            <span class="count">16.</span> CITIZENSHIP
                        </td>
                        <td colspan="4" style="border: 1px solid #000;padding-left:10px">
                            {{ $personalInformation->citizenship == 'filipino' ? 'Filipino' : 'Dual Citizen' }}
                        </td>
                    </tr>
                    <tr>
                        <td colspan="1" style="border: 1px solid #000;" class="s-label border-0"></td>
                        <td colspan="5" style="border: 1px solid #000;"></td>
                        <td colspan="3" style="border: 1px solid #000;"
                            class="s-label align-top border-0 text-center small">
                            If holder of dual citizenship,
                        </td style="border: 1px solid #000;">
                        <td colspan="4" style="border: 1px solid #000;padding-left:10px">
                            {{ $personalInformation->citizenship == 'filipino'
                                ? ''
                                : ($personalInformation->citizenship == 'dual_citizen_by_birth'
                                    ? 'Dual Citizen by Birth'
                                    : 'Dual Citizen by Naturalization') }}
                        </td>
                    </tr>
                    <tr>
                        <td colspan="1" style="border: 1px solid #000;" class="s-label"><span
                                class="count">4.</span> PLACE OR BIRTH</td>
                        <td colspan="5" style="border: 1px solid #000;padding-left:10px">
                            {{ $personalInformation->place_of_birth }}</td>
                        <td colspan="3" style="border: 1px solid #000;"
                            class="s-label align-top border-0 text-center small"> please indicate the
                            details.
                        </td>
                        <td colspan="4" style="border: 1px solid #000;"></td>
                    </tr>
                    <tr>
                        <td colspan="1" style="border: 1px solid #000;" class="s-label"><span
                                class="count">5.</span> SEX</td>
                        <td colspan="5" style="border: 1px solid #000;padding-left:10px">
                            {{ ucwords($personalInformation->sex) }}
                        </td>
                        <td colspan="3" style="border: 1px solid #000;" class="s-label align-top border-0"></td>
                        <td colspan="4" style="border: 1px solid #000;"></td>
                    </tr>
                    <tr>
                        <td colspan="1" style="border: 1px solid #000;" class="s-label border-bottom-0"><span
                                class="count">6.</span> CIVIL STATUS
                        </td>
                        <td colspan="5" style="border: 1px solid #000;padding-left:10px">
                            {{ ucwords($personalInformation->civil_status) }}</td>
                        <td colspan="2" style="border: 1px solid #000;"
                            class="s-label align-top border-bottom-0 small">
                            <span class="count">17.</span> RESIDENTIAL ADDRESS
                        </td>
                        <td colspan="2" style="border: 1px solid #000;padding-left:10px">
                            {{ ucwords($personalInformation->residentialAddress->house_no) }}
                        </td>
                        <td colspan="3" style="border: 1px solid #000;padding-left:10px">
                            {{ ucwords($personalInformation->residentialAddress->street) }}
                        </td>
                    </tr>
                    <tr>
                        <td colspan="1" style="border: 1px solid #000;" class="s-label border-top-0"><span
                                class="count"></span></td>
                        <td colspan="5" style="border: 1px solid #000;"></td>
                        <td colspan="2" style="border: 1px solid #000;" class="s-label border-0"></td>
                        <td colspan="2" style="border: 1px solid #000;padding-left:10px">
                            {{ ucwords($personalInformation->residentialAddress->subdivision) }}
                        </td>
                        <td colspan="3" style="border: 1px solid #000;padding-left:10px">
                            {{ ucwords($personalInformation->residentialAddress->barangay) }}
                        </td>
                    </tr>
                    <tr>
                        <td colspan="1" style="border: 1px solid #000;" class="s-label"><span
                                class="count">7.</span> HEIGHT (m)</td>
                        <td colspan="5" style="border: 1px solid #000;padding-left:10px">
                            {{ $personalInformation->height }}
                        </td>
                        <td colspan="2" style="border: 1px solid #000;" class="s-label align-top border-0"></td>
                        <td colspan="2" style="border: 1px solid #000;padding-left:10px">
                            {{ ucwords($personalInformation->residentialAddress->city) }}

                        </td>
                        <td colspan="3" style="border: 1px solid #000;padding-left:10px">
                            {{ ucwords($personalInformation->residentialAddress->province) }}
                        </td>
                    </tr>
                    <tr>
                        <td colspan="1" style="border: 1px solid #000;" class="s-label"><span
                                class="count">8.</span> WEIGHT (kg)</td>
                        <td colspan="5" style="border: 1px solid #000;padding-left:10px">
                            {{ $personalInformation->weight }}

                        </td>
                        <td colspan="2" style="border: 1px solid #000;" class="s-label border-0 text-center">
                            ZIP CODE
                        </td>
                        <td colspan="5" style="border: 1px solid #000;padding-left:10px">
                            {{ $personalInformation->residentialAddress->zipcode }}
                        </td>
                    </tr>
                    <tr>
                        <td colspan="1" style="border: 1px solid #000;" class="s-label"><span
                                class="count">9.</span> BLOOD TYPE</td>
                        <td colspan="5" style="border: 1px solid #000;padding-left:10px">
                            {{ $personalInformation->blood_type }}
                        </td>
                        <td colspan="2" style="border: 1px solid #000;" class="s-label border-bottom-0"><span
                                class="count">18.</span> PERMANENT
                            ADDRESS</td>
                        <td colspan="2" style="border: 1px solid #000;padding-left:10px">
                            {{ ucwords($personalInformation->permanentAddress->house_no) }}
                        </td>
                        <td colspan="3" style="border: 1px solid #000;padding-left:10px">
                            {{ ucwords($personalInformation->permanentAddress->street) }}
                        </td>
                    </tr>
                    <tr>
                        <td colspan="1" style="border: 1px solid #000;" class="s-label"><span
                                class="count">10.</span> GSIS ID NO.</td>
                        <td colspan="5" style="border: 1px solid #000;padding-left:10px">
                            {{ $personalInformation->gsis_id }}
                        </td>
                        <td colspan="2" style="border: 1px solid #000;" class="s-label border-0"></td>
                        <td colspan="2" style="border: 1px solid #000;padding-left:10px">
                            {{ ucwords($personalInformation->permanentAddress->subdivision) }}
                        </td>
                        <td colspan="3" style="border: 1px solid #000;padding-left:10px">
                            {{ ucwords($personalInformation->permanentAddress->barangay) }}
                        </td>
                    </tr>
                    <tr>
                        <td colspan="1" style="border: 1px solid #000;" class="s-label"><span
                                class="count">11.</span> PAG-IBIG NO.</td>
                        {{ $personalInformation->gsis_id }}
                        <td colspan="5" style="border: 1px solid #000;padding-left:10px"">
                            {{ $personalInformation->pag_ibig_id }}
                        </td>
                        <td colspan="2" style="border: 1px solid #000;" class="s-label border-0"></td>
                        <td colspan="2" style="border: 1px solid #000;padding-left:10px">
                            {{ ucwords($personalInformation->permanentAddress->city) }}
                        </td>
                        <td colspan="3" style="border: 1px solid #000;padding-left:10px">
                            {{ ucwords($personalInformation->permanentAddress->province) }}
                        </td>
                    </tr>
                    <tr>
                        <td colspan="1" style="border: 1px solid #000;" class="s-label"><span
                                class="count">12.</span> PHILHEALTH NO.</td>
                        <td colspan="5" style="border: 1px solid #000;padding-left:10px">
                            {{ $personalInformation->philhealth_id }}
                        </td>
                        <td colspan="2" style="border: 1px solid #000;" class="s-label text-center border-0">ZIP
                            CODE</td>
                        <td colspan="5" style="border: 1px solid #000;padding-left:10px">
                            {{ ucwords($personalInformation->permanentAddress->zipcode) }}
                        </td>
                    </tr>
                    <tr>
                        <td colspan="1" style="border: 1px solid #000;" class="s-label"><span
                                class="count">13.</span> SSS NO.</td>
                        <td colspan="5" style="border: 1px solid #000;padding-left:10px">
                            {{ $personalInformation->sss_id }}
                        </td>
                        <td colspan="2" style="border: 1px solid #000;" class="s-label"><span
                                class="count">19.</span> TELEPHONE NO.</td>
                        <td colspan="5" style="border: 1px solid #000;padding-left:10px">
                            {{ $personalInformation->telephone_no }}
                        </td>
                    </tr>
                    <tr>
                        <td colspan="1" style="border: 1px solid #000;" class="s-label"><span
                                class="count">14.</span> TIN NO.</td>
                        <td colspan="5" style="border: 1px solid #000;padding-left:10px">
                            {{ $personalInformation->tin_id }}
                        </td>
                        <td colspan="2" style="border: 1px solid #000;" class="s-label"><span
                                class="count">20.</span> MOBILE NO.</td>
                        <td colspan="5" style="border: 1px solid #000;padding-left:10px">
                            {{ $personalInformation->mobile_no }}
                        </td>
                    </tr>
                    <tr>
                        <td colspan="1" style="border: 1px solid #000;" class="s-label"><span
                                class="count">15.</span> AGENCY EMPLOYEE NO.</td>
                        <td colspan="5" style="border: 1px solid #000;padding-left:10px">
                            {{ $personalInformation->agency_employee_no }}
                        </td>
                        <td colspan="2" style="border: 1px solid #000;" class="s-label"><span
                                class="count">21.</span> EMAIL ADDRESS (if any)
                        </td>
                        <td colspan="5" style="border: 1px solid #000;padding-left:10px">
                            {{ $personalInformation->email }}
                        </td>
                    </tr>
                </tbody>

                <tbody class="table-body" style="border: 1px solid #000;">
                    <tr>
                        <td colspan="13" style="border: 1px solid #000;color:white" class="text-white separator">
                            II. FAMILY
                            BACKGROUND</td>
                    </tr>
                    <tr>
                        <td colspan="1" style="border: 1px solid #000;" class="s-label border-bottom-0">
                            <span class="count">22.</span> SPOUSE SURNAME
                        </td>
                        <td colspan="5" style="border: 1px solid #000;padding-left:10px">
                            {{ $personalInformation->familyBackground->spouse_surname }}
                        </td>
                        <td colspan="2" style="border: 1px solid #000;" class="s-label border-bottom-0">
                            OCCUPATION
                        </td>
                        <td colspan="5" style="border: 1px solid #000;padding-left:10px">
                            {{ $personalInformation->familyBackground->spouse_occupation }}
                        </td>
                    </tr>
                    <tr>
                        <td colspan="1" style="border: 1px solid #000;" class="s-label border-0">
                            <span class="count"></span> FIRST NAME
                        </td>
                        <td colspan="5" style="border: 1px solid #000;padding-left:10px">
                            {{ $personalInformation->familyBackground->spouse_first_name }}

                        </td>
                        <td colspan="2" style="border: 1px solid #000;" class="s-label border-bottom-0">
                            EMPLOYER/BUSINESS NAME
                        </td>
                        <td colspan="5" style="border: 1px solid #000;padding-left:10px">
                            {{ $personalInformation->familyBackground->spouse_business_name }}
                        </td>
                    </tr>
                    <tr>
                        <td colspan="1" style="border: 1px solid #000;" class="s-label border-0">
                            <span class="count"></span> MIDDLE NAME
                        </td>
                        <td colspan="5" style="border: 1px solid #000;">
                            {{ $personalInformation->familyBackground->spouse_middle_name }}
                        </td>
                        <td colspan="2" style="border: 1px solid #000;" class="s-label border-bottom-0">
                            BUSINESS ADDRESS
                        </td>
                        <td colspan="5" style="border: 1px solid #000;padding-left:10px">
                            {{ $personalInformation->familyBackground->spouse_business_address }}
                        </td>
                    </tr>
                    <tr>
                        <td colspan="1" style="border: 1px solid #000;" class="s-label border-0">
                            <span class="count"></span> <small>
                                NAME EXTENSION (JR.,SR)
                            </small>
                        </td>
                        <td colspan="5" style="border: 1px solid #000;">
                            {{ $personalInformation->familyBackground->spouse_suffix }}
                        </td>
                        <td colspan="2" style="border: 1px solid #000;" class="s-label border-bottom-0">
                            TELEPHONE NO.
                        </td>
                        <td colspan="5" style="border: 1px solid #000;padding-left:10px">
                            {{ $personalInformation->familyBackground->spouse_telephone_no }}
                        </td>
                    </tr>

                    <tr>

                        <td colspan="8" style="border: 1px solid #000;" class="s-label">
                            <span class="count">23.</span> NAME of CHILDREN (Write full name and list all)
                        </td>
                        <td colspan="5" style="border: 1px solid #000;" class="s-label text-center"
                            style="width: 18%;">DATE OF BIRTH (mm/dd/yyyy)
                        </td>
                    </tr>
                    @forelse ($personalInformation->familyBackground->children as $data)
                        <tr>
                            <td colspan="8" style="border: 1px solid #000;">
                                {{ $data->child_name }}
                            </td>
                            <td colspan="5" style="border: 1px solid #000;">
                                {{ date('m/d/Y', strtotime($data->child_date_of_birth)) }}
                            </td>
                        </tr>
                    @empty
                    @endforelse
                    <tr>
                        <td colspan="8" style="border: 1px solid #000;">
                        </td>
                        <td colspan="5" style="border: 1px solid #000;">
                        </td>
                    </tr>
                    <tr>
                        <td colspan="8" style="border: 1px solid #000;">
                        </td>
                        <td colspan="5" style="border: 1px solid #000;">
                        </td>
                    </tr>
                    <tr>
                        <td colspan="1" style="border: 1px solid #000;" class="s-label border-bottom-0">
                            <span class="count">24.</span> FATHER'S SURNAME
                        </td>
                        <td colspan="12" style="border: 1px solid #000;">
                            {{ $personalInformation->familyBackground->father_surname }}
                        </td>
                        {{-- <td colspan="3" style="border: 1px solid #000;"></td>
                        <td colspan="3" style="border: 1px solid #000;"></td> --}}
                    </tr>
                    <tr>
                        <td colspan="1" style="border: 1px solid #000;" class="s-label border-0">
                            <span class="count"></span> FIRST NAME
                        </td>
                        <td colspan="12" style="border: 1px solid #000;">
                            {{ $personalInformation->familyBackground->father_first_name }}
                        </td>
                        {{-- <td colspan="1" style="border: 1px solid #000;"></td>
                        <td colspan="3" style="border: 1px solid #000;"></td>
                        <td colspan="3" style="border: 1px solid #000;"></td> --}}
                    </tr>
                    <tr>
                        <td colspan="1" style="border: 1px solid #000;" class="s-label border-0">
                            <span class="count"></span> MIDDLE NAME
                        </td>
                        <td colspan="12" style="border: 1px solid #000;">
                            {{ $personalInformation->familyBackground->father_middle_name }}
                        </td>
                        {{-- <td colspan="3" style="border: 1px solid #000;"></td>
                        <td colspan="3" style="border: 1px solid #000;"></td> --}}
                    </tr>
                    <tr>
                        <td colspan="1" style="border: 1px solid #000;" class="s-label border-0">
                            <span class="count"></span> <small>
                                NAME EXTENSION (JR.,SR)
                            </small>
                        </td>
                        <td colspan="12" style="border: 1px solid #000;">
                            {{ $personalInformation->familyBackground->father_suffix }}
                        </td>
                        {{-- <td colspan="3" style="border: 1px solid #000;"></td>
                        <td colspan="3" style="border: 1px solid #000;"></td> --}}
                    </tr>
                    <tr>
                        <td colspan="1" style="border: 1px solid #000;" class="s-label border-bottom-0">
                            <span class="count">25.</span> MOTHERS MAIDEN NAME
                        </td>
                        <td colspan="12" style="border: 1px solid #000;"></td>
                        {{-- <td colspan="3" style="border: 1px solid #000;"></td>
                        <td colspan="3" style="border: 1px solid #000;"></td> --}}
                    </tr>
                    <tr>
                        <td colspan="1" style="border: 1px solid #000;" class="s-label border-0">
                            <span class="count"></span> SURNAME
                        </td>
                        <td colspan="12" style="border: 1px solid #000;">
                            {{ $personalInformation->familyBackground->mother_surname }}
                        </td>
                        {{-- <td colspan="3" style="border: 1px solid #000;"></td>
                        <td colspan="3" style="border: 1px solid #000;"></td> --}}
                    </tr>
                    <tr>
                        <td colspan="1" style="border: 1px solid #000;" class="s-label border-0">
                            <span class="count"></span> FIRST NAME
                        </td>
                        <td colspan="12" style="border: 1px solid #000;">
                            {{ $personalInformation->familyBackground->mother_first_name }}
                        </td>
                        {{-- <td colspan="3" style="border: 1px solid #000;"></td>
                        <td colspan="3" style="border: 1px solid #000;"></td> --}}
                    </tr>
                    <tr>
                        <td colspan="1" style="border: 1px solid #000;" class="s-label border-0">
                            <span class="count"></span> MIDDLE NAME
                        </td>
                        <td colspan="5" style="border: 1px solid #000;">
                            {{ $personalInformation->familyBackground->mother_middle_name }}
                        </td>
                        <td colspan="7"
                            style="border: 1px solid #000;color:red;background: white; text-align:center"
                            class="s-label text-danger text-center">
                            <i><b>(Continue on seperate sheet
                                    if
                                    necessary)</b></i>
                        </td>
                    </tr>
                </tbody>

                <tbody class="table-body" style="border: 1px solid #000;">
                    <tr>
                        <td colspan="13" class="text-white separator" style="border: 1px solid #000;color:white">
                            III. EDUCATIONAL BACKGROUND</td>
                    </tr>
                    <tr class="text-center">
                        <td style="border: 1px solid #000;" colspan="1" class="s-label border-bottom-0">
                            <span class="count">26.</span>
                            <span class="d-block text-center">LEVEL</span>
                        </td>
                        <td style="border: 1px solid #000;" colspan="4" class="s-label border-bottom-0">

                        </td>
                        <td style="border: 1px solid #000;" colspan="2" class="s-label border-bottom-0">
                            BASIC EDUCATION/DEGREE/COURSE
                            (Write in full)
                        </td>
                        <td style="border: 1px solid #000;" colspan="2" class="s-label border-bottom-0">
                            PERIOD OF ATTENDANCE
                        </td>
                        <td style="border: 1px solid #000;" colspan="1" class="s-label border-bottom-0">HIGHEST
                            LEVEL/UNITS EARNED(If not
                            graduated)</td>
                        <td style="border: 1px solid #000;" colspan="1" class="s-label border-bottom-0">
                            SCHOLAR<br />SHIP/ACADE<br />MIC HONORS RECEIVED</td>
                        <td style="border: 1px solid #000;" colspan="2" class="s-label border-bottom-0">
                            YEAR<br />
                            GRADUATED</td>
                    </tr>
                    <tr class="text-center" style="margin-top: -20px;">
                        <td style="border: 1px solid #000;" colspan="1" class="s-label border-top-0"></td>
                        <td style="border: 1px solid #000;" colspan="4" class="s-label border-top-0"></td>
                        <td style="border: 1px solid #000;" colspan="2" class="s-label border-top-0"></td>
                        <td style="border: 1px solid #000;" colspan="1" class="s-label">From</td>
                        <td style="border: 1px solid #000;" colspan="1" class="s-label">To</td>
                        <td style="border: 1px solid #000;" colspan="1" class="s-label border-top-0"></td>
                        <td style="border: 1px solid #000;" colspan="1" class="s-label border-top-0"></td>
                        <td style="border: 1px solid #000;" colspan="2" class="s-label border-top-0"></td>
                    </tr>
                    @forelse ($personalInformation->educationalBackground as $data)
                        <tr>
                            <td style="border: 1px solid #000;" colspan="1" class="s-label">
                                <span class="count"></span> {{ strtoupper($data->level) }}
                            </td>
                            <td style="border: 1px solid #000;" colspan="4">
                                {{-- {{ ucwords($data->school_name) }}</td> --}}
                            </td>
                            <td style="border: 1px solid #000;" colspan="2">
                                {{ ucwords($data->basic_education_degree_course) }}</td>
                            </td>
                            <td style="border: 1px solid #000;" colspan="1">{{ ucwords($data->start_date) }}</td>
                            <td style="border: 1px solid #000;" colspan="1">{{ ucwords($data->end_date) }}</td>
                            <td style="border: 1px solid #000;" colspan="1">{{ ucwords($data->highest_level) }}
                            </td>
                            <td style="border: 1px solid #000;" colspan="0">{{ ucwords($data->honor_received) }}
                            </td>
                            <td style="border: 1px solid #000;" colspan="2">{{ ucwords($data->year_graduated) }}
                            </td>
                        </tr>
                    @empty
                        {{-- <tr>
                            <td style="border: 1px solid #000;" colspan="1" class="s-label">
                                <span class="count"></span> ELEMENTARY
                            </td>
                            <td style="border: 1px solid #000;" colspan="4"></td>
                            <td style="border: 1px solid #000;" colspan="2"></td>
                            <td style="border: 1px solid #000;" colspan="1"></td>
                            <td style="border: 1px solid #000;" colspan="1"></td>
                            <td style="border: 1px solid #000;" colspan="1"></td>
                            <td style="border: 1px solid #000;" colspan="1"></td>
                            <td style="border: 1px solid #000;" colspan="1"></td>
                        </tr>
                        <tr>
                            <td style="border: 1px solid #000;" colspan="1" class="s-label">
                                <span class="count"></span> SECONDARY
                            </td>
                            <td style="border: 1px solid #000;" colspan="4"></td>
                            <td style="border: 1px solid #000;" colspan="2"></td>
                            <td style="border: 1px solid #000;" colspan="1"></td>
                            <td style="border: 1px solid #000;" colspan="1"></td>
                            <td style="border: 1px solid #000;" colspan="1"></td>
                            <td style="border: 1px solid #000;" colspan="1"></td>
                            <td style="border: 1px solid #000;" colspan="1"></td>
                        </tr> --}}
                        <tr>
                            <td style="border: 1px solid #000;" colspan="1" class="s-label">
                                <span class="count"></span> COLLEGE
                            </td>
                            <td style="border: 1px solid #000;" colspan="4"></td>
                            <td style="border: 1px solid #000;" colspan="2"></td>
                            <td style="border: 1px solid #000;" colspan="1"></td>
                            <td style="border: 1px solid #000;" colspan="1"></td>
                            <td style="border: 1px solid #000;" colspan="1"></td>
                            <td style="border: 1px solid #000;" colspan="1"></td>
                            <td style="border: 1px solid #000;" colspan="1"></td>
                        </tr>
                        <tr>
                            <td style="border: 1px solid #000;" colspan="1" class="s-label">
                                <span class="count"></span> GRADUATE STUDIES
                            </td>
                            <td style="border: 1px solid #000;" colspan="4"></td>
                            <td style="border: 1px solid #000;" colspan="2"></td>
                            <td style="border: 1px solid #000;" colspan="1"></td>
                            <td style="border: 1px solid #000;" colspan="1"></td>
                            <td style="border: 1px solid #000;" colspan="1"></td>
                            <td style="border: 1px solid #000;" colspan="1"></td>
                            <td style="border: 1px solid #000;" colspan="1"></td>
                        </tr>
                    @endforelse



                </tbody>

                <tbody class="table-body">
                    <tr>
                        <td style="border: 1px solid #000;color:red; background-color:white; text-align:center"
                            colspan="13" class="text-white separator bg-transparent text-danger text-center">
                            <i>(Continue on seperate sheet if necessary)</i>
                        </td>
                    </tr>
                    <tr style="border: 1px solid #000;">
                        <td colspan="1" style="border: 1px solid #000;" class="text-center">
                            <i><b>SIGNATURE</b></i>
                        </td>
                        <td colspan="6" style="border: 1px solid #000;"></td>
                        <td colspan="2" style="border: 1px solid #000;" class="text-center"><i><b>DATE</b></i>
                        </td>
                        <td colspan="4" style="border: 1px solid #000;"></td>
                    </tr>
                </tbody>

                <!-- End of Page 1 -->

                <tbody class="table-body">
                    <tr>
                        <td style="border: 1px solid #000;color:white" colspan="13" class="text-white separator">
                            IV. CIVIL
                            SERVICE ELIGIBILITY</td>
                    </tr>
                    <tr class="text-center">
                        <td style="border: 1px solid #000;" colspan="5" class="s-label border-bottom-0">
                            <span class="count float-left">27.</span>
                            CAREER SERVICE/ RA 1080 (BOARD/ BAR) UNDER SPECIAL LAWS/ CES/ CSEE
                            BARANGAY ELIGIBILITY / DRIVER'S LICENSE
                        </td>
                        <td style="border: 1px solid #000;" colspan="1" class="s-label border-bottom-0">
                            RATING<br>(If Applicable)</td>
                        <td style="border: 1px solid #000;" colspan="2" class="s-label border-bottom-0">DATE OF
                            EXAMINATION / CONFERMENT</td>
                        <td style="border: 1px solid #000;" colspan="2" class="s-label border-bottom-0">PLACE OF
                            EXAMINATION / CONFERMENT</td>
                        <td style="border: 1px solid #000;" colspan="3" class="s-label border-bottom-0">
                            LICENSE<br>(if applicable)</td>
                    </tr>
                    <tr class="text-center">
                        <td style="border: 1px solid #000;" colspan="5" class="s-label border-top-0"></td>
                        <td style="border: 1px solid #000;" colspan="1" class="s-label border-top-0"></td>
                        <td style="border: 1px solid #000;" colspan="2" class="s-label border-top-0"></td>
                        <td style="border: 1px solid #000;" colspan="2" class="s-label border-top-0"></td>
                        <td style="border: 1px solid #000;" colspan="1" class="s-label">NUMBER</td>
                        <td style="border: 1px solid #000;" colspan="2" class="s-label">Date of Validity</td>
                    </tr>
                    @forelse ($personalInformation->civilServiceEligibility as $data)
                        <tr>
                            <td style="border: 1px solid #000;" colspan="5">{{ $data->career_service }}</td>
                            <td style="border: 1px solid #000;" colspan="1">{{ $data->rating }}</td>
                            <td style="border: 1px solid #000;" colspan="2">{{ $data->examination_date }}</td>
                            <td style="border: 1px solid #000;" colspan="2">{{ $data->examination_place }}</td>
                            <td style="border: 1px solid #000;" colspan="1">{{ $data->license_number }}</td>
                            <td style="border: 1px solid #000;" colspan="2">
                                {{ date('m/d/Y', strtotime($data->license_validity_date)) }}
                            </td>
                        </tr>
                    @empty
                    @endforelse
                    <tr>
                        <td style="border: 1px solid #000;" colspan="5"></td>
                        <td style="border: 1px solid #000;" colspan="1"></td>
                        <td style="border: 1px solid #000;" colspan="2"></td>
                        <td style="border: 1px solid #000;" colspan="2"></td>
                        <td style="border: 1px solid #000;" colspan="1"></td>
                        <td style="border: 1px solid #000;" colspan="2"></td>
                    </tr>
                    <tr>
                        <td style="border: 1px solid #000;" colspan="5"></td>
                        <td style="border: 1px solid #000;" colspan="1"></td>
                        <td style="border: 1px solid #000;" colspan="2"></td>
                        <td style="border: 1px solid #000;" colspan="2"></td>
                        <td style="border: 1px solid #000;" colspan="1"></td>
                        <td style="border: 1px solid #000;" colspan="2"></td>
                    </tr>
                </tbody>

                <tbody class="table-body">
                    <tr>
                        <td style="border: 1px solid #000;color:red; background-color:white; text-align:center"
                            colspan="13" class="text-white separator bg-transparent text-danger text-center">
                            <i>(Continue on seperate sheet if necessary)</i>
                        </td>
                    </tr>
                </tbody>

                <tbody class="table-body">
                    <tr>
                        <td style="border: 1px solid #000;color:white" colspan="13" class="text-white separator">
                            V. WORK EXPERIENCE<br>
                            <small><i>(Include private employment. Start from your recent work) Description of duties
                                    should be
                                    indicated in the attached Work Experience sheet.</i></small>
                        </td>
                    </tr>
                    <tr class="text-center">
                        <td style="border: 1px solid #000;" colspan="1" class="s-label border-bottom-0"
                            style="width: 20%;">
                            <span class="count float-left">28.</span>
                            INCLUSIVE DATES<br>(mm/dd/yyyy)

                        </td>
                        <td style="border: 1px solid #000;" colspan="5" class="s-label border-bottom-0">
                            POSITION TITLE<br>
                            Write in full/Do not abbreviate)
                        </td>
                        <td style="border: 1px solid #000;" colspan="3" class="s-label border-bottom-0">
                            DEPARTMENT/AGENCY/OFFICE/COMPANY<br>
                            (Write in full/Do not abbreviate)
                        </td>
                        <td style="border: 1px solid #000;" colspan="1" class="s-label border-bottom-0">
                            MONTHLY<br>SALARY (Peso)</td>
                        <td style="border: 1px solid #000;" colspan="1" class="s-label border-bottom-0">
                            <small>SALARY/ JOB/ PAY<br>GRADE (if
                                applicable)& STEP
                                (Format "00-0")/ INCREMENT</small>
                        </td>
                        <td style="border: 1px solid #000;" colspan="1" class="s-label border-bottom-0">STATUS
                            OF<br>APPOINTMENT</td>
                        <td style="border: 1px solid #000;" colspan="1" class="s-label border-bottom-0">GOV'T
                            SERVICE<br>
                            <small>(Y/ N)</small>
                        </td>
                    </tr>
                    <tr>
                        <td style="border: 1px solid #000;" colspan="1" class="p-0">
                            <table class="w-100 border-0">
                                <tbody class="border-0">
                                    <tr class="text-center">
                                        <td class="s-label border-0 border-bottom-0" style="width: 50%;">From</td>
                                        <td class="s-label border-top-0 border-right-0 border-bottom-0"
                                            style="width: 50%;">To
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </td>
                        <td style="border: 1px solid #000;" colspan="5" class="s-label border-top-0"></td>
                        <td style="border: 1px solid #000;" colspan="3" class="s-label border-top-0"></td>
                        <td style="border: 1px solid #000;" colspan="1" class="s-label border-top-0"></td>
                        <td style="border: 1px solid #000;" colspan="1" class="s-label border-top-0"></td>
                        <td style="border: 1px solid #000;" colspan="1" class="s-label border-top-0"></td>
                        <td style="border: 1px solid #000;" colspan="1" class="s-label border-top-0"></td>
                    </tr>
                    @forelse ($personalInformation->workExperience as $data)
                        <tr>
                            <td style="border: 1px solid #000;" colspan="1" class="p-0">
                                <table class="w-100 border-0">
                                    <tbody class="border-0">
                                        <tr>
                                            <td style="border: 1px solid #000;" class="border-0 border-bottom-0"
                                                style="width: 50%;">{{ date('m/d/Y', strtotime($data->start_date)) }}
                                            </td>
                                            <td style="border: 1px solid #000;"
                                                class="border-top-0 border-right-0 border-bottom-0"
                                                style="width: 50%;">
                                                {{ date('m/d/Y', strtotime($data->end_date)) }}
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </td>
                            <td style="border: 1px solid #000;" colspan="5">{{ $data->position_title }}</td>
                            <td style="border: 1px solid #000;" colspan="3">{{ $data->company }}</td>
                            <td style="border: 1px solid #000;" colspan="1">{{ $data->monthly_salary }}</td>
                            <td style="border: 1px solid #000;" colspan="1">
                                {{ $data->salary_grade }}-{{ $data->salary_step }}</td>
                            <td style="border: 1px solid #000;" colspan="1">{{ $data->status_of_appointment }}
                            </td>
                            <td style="border: 1px solid #000;" colspan="1">{{ $data->govt_service }}</td>
                        </tr>
                    @empty
                    @endforelse

                    <tr>
                        <td style="border: 1px solid #000;" colspan="1" class="p-0">
                            <table class="w-100 border-0">
                                <tbody class="border-0">
                                    <tr>
                                        <td style="border: 1px solid #000;" class="border-0 border-bottom-0"
                                            style="width: 50%;"></td>
                                        <td style="border: 1px solid #000;"
                                            class="border-top-0 border-right-0 border-bottom-0" style="width: 50%;">
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </td>
                        <td style="border: 1px solid #000;" colspan="5"></td>
                        <td style="border: 1px solid #000;" colspan="3"></td>
                        <td style="border: 1px solid #000;" colspan="1"></td>
                        <td style="border: 1px solid #000;" colspan="1"></td>
                        <td style="border: 1px solid #000;" colspan="1"></td>
                        <td style="border: 1px solid #000;" colspan="1"></td>
                    </tr>
                    <tr>
                        <td style="border: 1px solid #000;" colspan="1" class="p-0">
                            <table class="w-100 border-0">
                                <tbody class="border-0">
                                    <tr>
                                        <td style="border: 1px solid #000;" class="border-0 border-bottom-0"
                                            style="width: 50%;"></td>
                                        <td style="border: 1px solid #000;"
                                            class="border-top-0 border-right-0 border-bottom-0" style="width: 50%;">
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </td>
                        <td style="border: 1px solid #000;" colspan="5"></td>
                        <td style="border: 1px solid #000;" colspan="3"></td>
                        <td style="border: 1px solid #000;" colspan="1"></td>
                        <td style="border: 1px solid #000;" colspan="1"></td>
                        <td style="border: 1px solid #000;" colspan="1"></td>
                        <td style="border: 1px solid #000;" colspan="1"></td>
                    </tr>
                </tbody>

                <tbody class="table-body">
                    <tr>
                        <td style="border: 1px solid #000;color:red; background-color:white; text-align:center"
                            colspan="13" class="text-white separator bg-transparent text-danger text-center">
                            <i>(Continue on seperate sheet if necessary)</i>
                        </td>
                    </tr>
                    <tr>
                        <td style="border: 1px solid #000;" colspan="1" class="text-center">
                            <i><b>SIGNATURE</b></i>
                        </td>
                        <td style="border: 1px solid #000;" colspan="6"></td>
                        <td style="border: 1px solid #000;" colspan="2" class="text-center"><i><b>DATE</b></i>
                        </td>
                        <td style="border: 1px solid #000;" colspan="4"></td>
                    </tr>
                </tbody>

                <!-- End of Page 2 -->

                <tbody class="table-body">
                    <tr>
                        <td style="border: 1px solid #000;color:white;" colspan="13" class="text-white separator">
                            VI. VOLUNTARY
                            WORK OR INVOLVEMENT IN CIVIC /
                            NON-GOVERNMENT / PEOPLE / VOLUNTARY ORGANIZATION/S</td>
                    </tr>
                    <tr class="text-center">
                        <td style="border: 1px solid #000;" colspan="6" class="s-label border-bottom-0">
                            <span class="count float-left">29.</span> NAME & ADDRESS OF ORGANIZATION<br>
                            (Write in full)
                        </td>
                        <td style="border: 1px solid #000;" colspan="3" class="s-label border-bottom-0">INCLUSIVE
                            DATES</td>
                        <td style="border: 1px solid #000;" colspan="1" class="s-label border-bottom-0">NUMBER OF
                            HOURS</td>
                        <td style="border: 1px solid #000;" colspan="3" class="s-label border-bottom-0">POSITION /
                            NATURE OF WORK</td>
                    </tr>
                    <tr class="text-center">
                        <td style="border: 1px solid #000;" colspan="6" class="s-label border-top-0"></td>
                        <td style="border: 1px solid #000;" colspan="1" class="s-label">From</td>
                        <td style="border: 1px solid #000;" colspan="2" class="s-label">To</td>
                        <td style="border: 1px solid #000;" colspan="1" class="s-label border-top-0"></td>
                        <td style="border: 1px solid #000;" colspan="3" class="s-label border-top-0"></td>
                    </tr>
                    @forelse ($personalInformation->voluntaryWork as $data)
                        <tr>
                            <td style="border: 1px solid #000;" colspan="6">{{ $data->organization_name }} -
                                {{ $data->organization_address }}</td>
                            <td style="border: 1px solid #000;" colspan="1">
                                {{ date('m/d/Y', strtotime($data->start_date)) }}</td>
                            <td style="border: 1px solid #000;" colspan="2">
                                {{ date('m/d/Y', strtotime($data->end_date)) }}</td>
                            <td style="border: 1px solid #000;" colspan="1">{{ $data->number_of_hours }}</td>
                            <td style="border: 1px solid #000;" colspan="3">{{ $data->position }}</td>
                        </tr>
                    @empty
                    @endforelse

                    <tr>
                        <td style="border: 1px solid #000;" colspan="6"></td>
                        <td style="border: 1px solid #000;" colspan="1"></td>
                        <td style="border: 1px solid #000;" colspan="2"></td>
                        <td style="border: 1px solid #000;" colspan="1"></td>
                        <td style="border: 1px solid #000;" colspan="3"></td>
                    </tr>
                    <tr>
                        <td style="border: 1px solid #000;" colspan="6"></td>
                        <td style="border: 1px solid #000;" colspan="1"></td>
                        <td style="border: 1px solid #000;" colspan="2"></td>
                        <td style="border: 1px solid #000;" colspan="1"></td>
                        <td style="border: 1px solid #000;" colspan="3"></td>
                    </tr>
                </tbody>

                <tbody class="table-body">
                    <tr>
                        <td style="border: 1px solid #000;color: red; background-color:#fff; text-align:center"
                            colspan="13" class="text-white separator bg-transparent text-danger text-center">
                            <i>(Continue on seperate sheet if necessary)</i>
                        </td>
                    </tr>
                </tbody>

                <tbody class="table-body">
                    <tr>
                        <td style="border: 1px solid #000;color:white;" colspan="13" class="text-white separator">
                            VII. LEARNING
                            AND DEVELOPMENT (L&D) INTERVENTIONS/TRAINING PROGRAMS ATTENDED<br>
                            <small><i>(Start from the most recent L&D/training program and include only the relevant
                                    L&D/training taken for the last five (5) years for Division
                                    Chief/Executive/Managerial positions)</i></small>
                        </td>
                    </tr>
                    <tr class="text-center">
                        <td style="border: 1px solid #000;" colspan="6" class="s-label border-bottom-0">
                            <span class="count float-left">30.</span> TITLE OF LEARNING AND DEVELOPMENT
                            INTERVENTIONS/TRAINING
                            PROGRAMS<br>
                            (Write in full)
                        </td>
                        <td style="border: 1px solid #000;" colspan="3" class="s-label border-bottom-0">INCLUSIVE
                            DATES</td>
                        <td style="border: 1px solid #000;" colspan="1" class="s-label border-bottom-0">NUMBER OF
                            HOURS</td>
                        <td style="border: 1px solid #000;" colspan="1" class="s-label border-bottom-0">Type of LD
                            ( Managerial/
                            Supervisory/Technical/etc)
                        </td>
                        <td style="border: 1px solid #000;" colspan="2" class="s-label border-bottom-0">CONDUCTED/
                            SPONSORED BY<br>(Write in full)
                        </td>
                    </tr>
                    <tr>
                        <td style="border: 1px solid #000;" colspan="6" class="s-label border-top-0"></td>
                        <td style="border: 1px solid #000;" colspan="1" class="s-label">From</td>
                        <td style="border: 1px solid #000;" colspan="2" class="s-label">To</td>
                        <td style="border: 1px solid #000;" colspan="1" class="s-label border-top-0"></td>
                        <td style="border: 1px solid #000;" colspan="1" class="s-label border-top-0"></td>
                        <td style="border: 1px solid #000;" colspan="2" class="s-label border-top-0"></td>
                    </tr>
                    @forelse ($personalInformation->learningAndDevelopment as $data)
                        <tr>
                            <td style="border: 1px solid #000;" colspan="6">{{ $data->title }}</td>
                            <td style="border: 1px solid #000;" colspan="1">
                                {{ date('m/d/Y', strtotime($data->start_date)) }}</td>
                            <td style="border: 1px solid #000;" colspan="2">
                                {{ date('m/d/Y', strtotime($data->end_date)) }}</td>
                            <td style="border: 1px solid #000;" colspan="1">{{ $data->number_of_hours }}</td>
                            <td style="border: 1px solid #000;" colspan="1">{{ $data->type }}</td>
                            <td style="border: 1px solid #000;" colspan="2">{{ $data->sponsored_by }}</td>
                        </tr>
                    @empty
                    @endforelse

                    <tr>
                        <td style="border: 1px solid #000;" colspan="6"></td>
                        <td style="border: 1px solid #000;" colspan="1"></td>
                        <td style="border: 1px solid #000;" colspan="2"></td>
                        <td style="border: 1px solid #000;" colspan="1"></td>
                        <td style="border: 1px solid #000;" colspan="1"></td>
                        <td style="border: 1px solid #000;" colspan="2"></td>
                    </tr>
                    <tr>
                        <td style="border: 1px solid #000;" colspan="6"></td>
                        <td style="border: 1px solid #000;" colspan="1"></td>
                        <td style="border: 1px solid #000;" colspan="2"></td>
                        <td style="border: 1px solid #000;" colspan="1"></td>
                        <td style="border: 1px solid #000;" colspan="1"></td>
                        <td style="border: 1px solid #000;" colspan="2"></td>
                    </tr>
                </tbody>

                <tbody class="table-body">
                    <tr>
                        <td style="border: 1px solid #000;color:red;background:white;text-align:center" colspan="13"
                            class="text-white separator bg-transparent text-danger text-center">
                            <i>(Continue on seperate sheet if necessary)</i>
                        </td>
                    </tr>
                </tbody>

                <tbody class="table-body">
                    <tr>
                        <td style="border: 1px solid #000;color:white" colspan="13" class="text-white separator">
                            VIII. OTHER INFORMATION</td>
                    </tr>
                    <tr class="text-center">
                        <td style="border: 1px solid #000;" colspan="4" class="s-label">
                            <span class="count float-left">31.</span> SPECIAL SKILLS and HOBBIES
                        </td>
                        <td style="border: 1px solid #000;" colspan="4" class="s-label">
                            <span class="count float-left">32.</span> NON-ACADEMIC DISTINCTIONS / RECOGNITION<br>(Write
                            in
                            full)
                        </td>
                        <td style="border: 1px solid #000;" colspan="5" class="s-label">
                            <span class="count float-left">33.</span> MEMBERSHIP IN ASSOCIATION/ORGANIZATION<br>(Write
                            in full)
                        </td>
                    </tr>
                    @forelse ($personalInformation->otherInformation as $data)
                        <tr>
                            <td style="border: 1px solid #000;" colspan="4">
                                @if ($data->category == 'skill_and_hobby')
                                    {{ $data->title }}
                                @endif
                            </td>
                            <td style="border: 1px solid #000;" colspan="4">
                                @if ($data->category == 'recognition')
                                    {{ $data->title }}
                                @endif
                            </td>
                            <td style="border: 1px solid #000;" colspan="5">
                                @if ($data->category == 'organization')
                                    {{ $data->title }}
                                @endif
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td style="border: 1px solid #000;" colspan="4"></td>
                            <td style="border: 1px solid #000;" colspan="4"></td>
                            <td style="border: 1px solid #000;" colspan="5"></td>
                        </tr>
                        <tr>
                            <td style="border: 1px solid #000;" colspan="4"></td>
                            <td style="border: 1px solid #000;" colspan="4"></td>
                            <td style="border: 1px solid #000;" colspan="5"></td>
                        </tr>
                    @endforelse

                </tbody>

                <tbody class="table-body">
                    <tr>
                        <td colspan="13" style="border: 1px solid #000;color:red;background:white;text-align:center"
                            class="text-white separator bg-transparent text-danger text-center">
                            <i>(Continue on seperate sheet if necessary)</i>
                        </td>
                    </tr>
                    <tr>
                        <td style="border: 1px solid #000" colspan="4" class="text-center"><i><b>SIGNATURE</b></i>
                        </td>
                        <td style="border: 1px solid #000" colspan="3"></td>
                        <td style="border: 1px solid #000" colspan="1" class="text-center"><i><b>DATE</b></i></td>
                        <td style="border: 1px solid #000" colspan="5"></td>
                    </tr>
                </tbody>

                <!-- End of Page 3 -->

                <!-- Q1 -->
                <tbody class="table-body question-block" style="border: 1px solid #000 !important">
                    {{-- <tr style="border: 1px solid #000">
                        <td style="border: 1px solid #000" colspan="13" class="separator"></td>
                    </tr> --}}
                    <tr style="border-top: 1px solid #000">
                        <td style="border: 1px solid #000" colspan="7" class="s-label border-bottom-0">
                            <span class="count">34.</span> Are you related by consanguinity or affinity to the
                            appointing or
                            recommending authority, or to the<br>
                            <span class="count"></span>chief of bureau or office or to the person who has immediate
                            supervision
                            over you in the Office,<br>
                            <span class="count"></span>Bureau or Department where you will beapppointed,<br>
                        </td>
                        <td colspan="2">

                        </td>
                        <td colspan="4"></td>
                    </tr>
                    <tr>
                        <td style="border: 1px solid #000" colspan="7" class="s-label">
                            <span class="count"></span>a. within the third degree?<br>
                        </td>
                        <td style="border: 1px solid #000" colspan="6">
                            @if ($personalInformation->survey->answer_1 == 1)
                                Yes
                            @elseif ($personalInformation->survey->answer_1 == 0)
                                No
                            @else
                            @endif
                        </td>
                    </tr>
                    <tr>
                        <td style="border: 1px solid #000" colspan="7" class="s-label">
                            <span class="count"></span>b. within the fourth degree (for Local Government Unit -
                            Career
                            Employees)?
                        </td>
                        <td style="border: 1px solid #000" colspan="6">
                            @if ($personalInformation->survey->answer_2 == '1')
                                Yes
                            @elseif ($personalInformation->survey->answer_2 == '0')
                                No
                            @else
                            @endif
                        </td>
                        {{-- <td style="border: 1px solid #000" colspan="3"></td> --}}
                    </tr>
                    <tr>
                        <td style="border: 1px solid #000" colspan="7" class="s-label">
                        </td>
                        <td style="border: 1px solid #000" colspan="2">If YES, give details:</td>
                        <td style="border: 1px solid #000" colspan="4">
                            {{ $personalInformation->survey->answer_2_detail }}
                        </td>
                    </tr>
                    <tr>
                        <td style="border: 1px solid #000" colspan="7" class="s-label"></td>
                        <td style="border: 1px solid #000" colspan="6"></td>
                    </tr>
                </tbody>

                <!-- Q2 -->
                <tbody class="table-body question-block">
                    <tr>
                        <td style="border: 1px solid #000" colspan="7" class="s-label border-bottom-0">
                            <span class="count">35.</span> a. Have you ever been found guilty of any administrative
                            offense?
                        </td>
                        <td style="border: 1px solid #000" colspan="6">
                            @if ($personalInformation->survey->answer_3 == '1')
                                Yes
                            @elseif ($personalInformation->survey->answer_3 == '0')
                                No
                            @else
                            @endif
                        </td>
                        {{-- <td style="border: 1px solid #000" colspan="3"></td> --}}
                    </tr>
                    <tr>
                        <td style="border: 1px solid #000" colspan="7" class="s-label"></td>
                        <td style="border: 1px solid #000" colspan="6">If YES, give details:</td>
                    </tr>
                    <tr>
                        <td style="border: 1px solid #000" colspan="7" class="s-label"></td>
                        <td style="border: 1px solid #000" colspan="6">
                            {{ $personalInformation->survey->answer_3_detail }}

                        </td>
                    </tr>
                    <tr>
                        <td style="border: 1px solid #000" colspan="7" class="s-label">
                            <span class="count"></span> b. within the fourth degree (for Local Government Unit -
                            Career
                            Employees)?
                        </td>
                        <td style="border: 1px solid #000 !important;" colspan="6">
                            @if ($personalInformation->survey->answer_4 == '1')
                                Yes
                            @elseif ($personalInformation->survey->answer_4 == '0')
                                No
                            @else
                            @endif
                        </td>
                        {{-- <td style="border: 1px solid #000 !important" colspan="3">
                        </td> --}}
                    </tr>
                    <tr>
                        <td style="border: 1px solid #000" colspan="7" class="s-label"></td>
                        <td style="border: 1px solid #000" colspan="2">If YES, give details:</td>
                        <td style="border: 1px solid #000" colspan="4">
                            {{ $personalInformation->survey->answer_4_detail }}
                        </td>
                    </tr>
                    <tr>
                        <td style="border: 1px solid #000" colspan="7" class="s-label"></td>
                        <td style="border: 1px solid #000" colspan="2">Date Filed:</td>
                        <td style="border: 1px solid #000" colspan="4">
                            {{ date('m/d/Y', strtotime($personalInformation->survey->answer_4_date_filed)) }}
                        </td>
                    </tr>
                    <tr>
                        <td style="border: 1px solid #000" colspan="7" class="s-label"></td>
                        <td style="border: 1px solid #000" colspan="2">Status of Case/s:</td>
                        <td style="border: 1px solid #000" colspan="4">
                            {{ $personalInformation->survey->answer_4_status }}
                        </td>
                    </tr>
                </tbody>

                <!-- Q3 -->
                <tbody class="table-body question-block" style="border: 1px solid #000">
                    <tr>
                        <td style="border: 1px solid #000" colspan="7" class="s-label border-bottom-0">
                            <span class="count">36.</span> Have you ever been convicted of any crime or violation of
                            any law,
                            decree, ordinance or regulation by any court or tribunal?
                        </td>
                        <td style="border: 1px solid #000" colspan="6">
                            @if ($personalInformation->survey->answer_5 == '1')
                                Yes
                            @elseif ($personalInformation->survey->answer_5 == '0')
                                No
                            @else
                            @endif
                        </td>
                        {{-- <td style="border: 1px solid #000" colspan="3"></td> --}}
                    </tr>
                    <tr>
                        <td style="border: 1px solid #000" colspan="7" class="s-label"></td>
                        <td style="border: 1px solid #000" colspan="6">If YES, give details:</td>
                    </tr>
                    <tr>
                        <td style="border: 1px solid #000" colspan="7" class="s-label"></td>
                        <td style="border: 1px solid #000" colspan="6">
                            {{ $personalInformation->survey->answer_5_detail }}

                        </td>
                    </tr>
                </tbody>

                <!-- Q4 -->
                <tbody class="table-body question-block" style="border: 1px solid #000">
                    <tr>
                        <td style="border: 1px solid #000" colspan="7" class="s-label border-bottom-0">
                            <span class="count">37.</span> Have you ever been separated from the service in any of
                            the following modes: resignation, retirement, dropped from the rolls, dismissal,
                            termination,
                            end of term, finished contract or phased out (abolition) in the public or private
                            sector?<br>


                        </td>
                        <td style="border: 1px solid #000" colspan="6">
                            @if ($personalInformation->survey->answer_6 == '1')
                                Yes
                            @elseif ($personalInformation->survey->answer_6 == '0')
                                No
                            @else
                            @endif
                        </td>
                        {{-- <td style="border: 1px solid #000" colspan="3"></td> --}}
                    </tr>
                    <tr>
                        <td style="border: 1px solid #000" colspan="7" class="s-label">
                            <br>
                        </td>
                        <td style="border: 1px solid #000" colspan="6">If YES, give details:</td>
                    </tr>
                    <tr>
                        <td style="border: 1px solid #000" colspan="7" class="s-label">

                        </td>
                        <td style="border: 1px solid #000" colspan="6">
                            {{ $personalInformation->survey->answer_6_detail }}

                        </td>
                        {{-- <td style="border: 1px solid #000" colspan="3"></td> --}}
                    </tr>
                </tbody>

                <!-- Q5 -->
                <tbody class="table-body question-block" style="border: 1px solid #000">
                    <tr>
                        <td style="border: 1px solid #000" colspan="7" class="s-label border-bottom-0">
                            <span class="count">38.</span> a. Have you ever been a candidate in a national or local
                            election
                            held within the last year (except Barangay election)?
                        </td>
                        <td style="border: 1px solid #000" colspan="6">
                            @if ($personalInformation->survey->answer_7 == '1')
                                Yes
                            @elseif ($personalInformation->survey->answer_7 == '0')
                                No
                            @else
                            @endif
                        </td>
                        {{-- <td style="border: 1px solid #000" colspan="3"></td> --}}
                    </tr>
                    <tr>
                        <td style="border: 1px solid #000" colspan="7" class="s-label">
                            <span class="count"></span><br>
                        </td>
                        <td style="border: 1px solid #000" colspan="2">If YES, give details:</td>
                        <td style="border: 1px solid #000" colspan="4">
                            {{ $personalInformation->survey->answer_7_detail }}</td>
                    </tr>
                    <tr>
                        <td style="border: 1px solid #000" colspan="7" class="s-label">
                            <span class="count"></span> b. Have you resigned from the government service during the
                            three
                            (3)-month period before the last
                        </td>
                        <td style="border: 1px solid #000" colspan="6">
                            @if ($personalInformation->survey->answer_8 == '1')
                                Yes
                            @elseif ($personalInformation->survey->answer_8 == '0')
                                No
                            @else
                            @endif
                        </td>
                        {{-- <td style="border: 1px solid #000" colspan="3"></td> --}}
                    </tr>
                    <tr>
                        <td style="border: 1px solid #000" colspan="7" class="s-label">
                            <span class="count"></span> election to promote/actively campaign for a national or local
                            candidate?
                        </td>
                        <td style="border: 1px solid #000" colspan="2">If YES, give details:</td>
                        <td style="border: 1px solid #000" colspan="4">
                            {{ $personalInformation->survey->answer_8_detail }}
                        </td>
                    </tr>
                    <tr>
                        <td style="border: 1px solid #000" colspan="7" class="s-label"></td>
                        <td style="border: 1px solid #000" colspan="2"></td>
                        <td style="border: 1px solid #000" colspan="4"></td>
                    </tr>
                </tbody>

                <!-- Q6 -->
                <tbody class="table-body question-block" style="border: 1px solid #000">
                    <tr>
                        <td style="border: 1px solid #000" colspan="7" class="s-label border-bottom-0">
                            <span class="count">39.</span> Have you acquired the status of an immigrant or permanent
                            resident
                            of another country?
                        </td>
                        {{-- <td style="border: 1px solid #000" colspan="2">
                        </td> --}}
                        <td style="border: 1px solid #000" colspan="6">
                            @if ($personalInformation->survey->answer_9 == '1')
                                Yes
                            @elseif ($personalInformation->survey->answer_9 == '0')
                                No
                            @else
                            @endif
                        </td>
                    </tr>
                    <tr>
                        <td style="border: 1px solid #000" colspan="7" class="s-label">
                        </td>
                        <td style="border: 1px solid #000" colspan="2">if YES, give details (country):</td>
                        <td style="border: 1px solid #000" colspan="4">
                            {{ $personalInformation->survey->answer_9_detail }}
                        </td>
                    </tr>
                    <tr>
                        <td style="border: 1px solid #000" colspan="7" class="s-label">
                        </td>
                        <td style="border: 1px solid #000" colspan="2"></td>
                        <td style="border: 1px solid #000" colspan="4"></td>
                    </tr>
                </tbody>

                <!-- Q7 -->
                <tbody class="table-body question-block">
                    <tr>
                        <td style="border: 1px solid #000" colspan="7" class="s-label border-bottom-0">
                            <span class="count">40.</span> Pursuant to: (a) Indigenous People's Act (RA 8371); (b)
                            Magna Carta
                            for Disabled Persons (RA<br>
                            <span class="count"></span> 7277); and (c) Solo Parents Welfare Act of 2000 (RA 8972),
                            please
                            answer the following items:
                        </td>
                        {{-- <td style="border: 1px solid #000" colspan="2">

                        </td> --}}
                        <td style="border: 1px solid #000" colspan="6"></td>
                    </tr>
                    <tr>
                        <td style="border: 1px solid #000" colspan="7" class="s-label">
                            <span class="count"></span>a. Are you a member of any indigenous group?<br>
                        </td>
                        {{-- <td style="border: 1px solid #000" colspan="2"></td> --}}
                        <td style="border: 1px solid #000" colspan="6">
                            @if ($personalInformation->survey->answer_10 == '1')
                                Yes
                            @elseif ($personalInformation->survey->answer_10 == '0')
                                No
                            @else
                            @endif
                        </td>
                    </tr>
                    <tr>
                        <td style="border: 1px solid #000" colspan="7" class="s-label">
                            <span class="count"></span><br>
                        </td>
                        <td style="border: 1px solid #000" colspan="2">If YES, please specify:</td>
                        <td style="border: 1px solid #000" colspan="4">
                            {{ $personalInformation->survey->answer_10_detail }}
                        </td>
                    </tr>
                    <tr>
                        <td style="border: 1px solid #000" colspan="7" class="s-label">
                            <span class="count"></span>b. Are you a person with disability?
                        </td>
                        <td style="border: 1px solid #000" colspan="6">
                            @if ($personalInformation->survey->answer_11 == '1')
                                Yes
                            @elseif ($personalInformation->survey->answer_11 == '0')
                                No
                            @else
                            @endif
                        </td>
                        {{-- <td style="border: 1px solid #000" colspan="3"></td> --}}
                    </tr>
                    <tr>
                        <td style="border: 1px solid #000" colspan="7" class="s-label">
                        </td>
                        <td style="border: 1px solid #000" colspan="2">If YES, please specify ID no:</td>
                        <td style="border: 1px solid #000" colspan="4">
                            {{ $personalInformation->survey->answer_11_id }}
                        </td>
                    </tr>
                    <tr>
                        <td style="border: 1px solid #000 !important;" colspan="7" class="s-label">
                            <span class="count"></span>c. Are you a solo parent?
                        </td>
                        {{-- <td style="border: 1px solid #000" colspan="2"></td> --}}
                        <td style="border: 1px solid #000" colspan="6">
                            @if ($personalInformation->survey->answer_12 == '1')
                                Yes
                            @elseif ($personalInformation->survey->answer_12 == '0')
                                No
                            @else
                            @endif
                        </td>
                    </tr>
                    <tr>
                        <td style="border: 1px solid #000 !important;" colspan="7" class="s-label"></td>
                        <td style="border-bottom: 1px solid #000 !important;" colspan="2">If YES, please specify:
                        </td>
                        <td style="border: 1px solid #000 !important;" colspan="4">
                            {{ $personalInformation->survey->answer_12_id }}
                        </td>
                    </tr>
                </tbody>

                <!-- End of Page 4 -->

                <tbody class="table-body" style="border: 1px solid #000">
                    <tr>
                        <td style="border: 1px solid #000" colspan="13" class="s-label">
                            <span class="count">41.</span> REFERENCES <span class="text-danger">(Person not related
                                by
                                consanguinity or affinity to applicant /appointee)</span>
                        </td>

                    </tr>
                    <tr class="text-center">
                        <td style="border: 1px solid #000" colspan="4" class="s-label">NAME</td>
                        <td style="border: 1px solid #000" colspan="4" class="s-label">ADDRESS</td>
                        <td style="border: 1px solid #000" colspan="5"class="s-label">TEL. NO.</td>
                    </tr>
                    @forelse ($personalInformation->reference as $data)
                        <tr>
                            <td style="border: 1px solid #000" colspan="4">{{ $data->name }}</td>
                            <td style="border: 1px solid #000" colspan="4">{{ $data->address }}</td>
                            <td style="border: 1px solid #000" colspan="5">{{ $data->telephone_no }}</td>
                        </tr>
                    @empty
                        <tr>
                            <td style="border: 1px solid #000" colspan="4"></td>
                            <td style="border: 1px solid #000" colspan="4"></td>
                            <td style="border: 1px solid #000" colspan="5"></td>
                        </tr>
                    @endforelse

                    <tr>
                        <td colspan="8">
                            <span class="count">42.</span> I declare under oath that I have personally accomplished
                            this
                            Personal Data Sheet which is a true correct and<br><span class="count"></span> complete
                            statement
                            pursuant to the provisions of pertinent laws, rules and regulations of the Republic of
                            the<br><span class="count"></span> Philippines. I authorize the agency head / authorized
                            representative t
                            verify validate the contents stated herein.<br><span class="count"></span> I agree that
                            any
                            misrepresentation made in this document and its attachments shall cause the filing
                            of<br><span class="count"></span> administrative/criminal case/s against me.
                        </td>

                        <td colspan="5">
                            <table class="w-75 mx-auto border-0">
                                <tbody class="border-0">
                                    <tr>
                                        <td style="border: 1px solid #000;height:200px" class="text-center p-3">ID
                                            picture taken
                                            within the last 6 months3.5 cm. X
                                            4.5
                                            cm(passport size)With full and handwrittenname tag and signature overprinted
                                            nameComputer generated or photocopied picture is not acceptable</td>
                                    </tr>
                                    <tr>
                                        <td style="text-align: center" class="border-0 text-muted lead text-center">
                                            PHOTO</td>
                                    </tr>
                                </tbody>
                            </table>
                        </td>
                    </tr>
                    <tr>
                        <td style="border: 1px solid #000" colspan="13" class="border-0 p-0">
                            <table class="border-0 w-100">
                                <tbody class="border-0">
                                    <tr>
                                        <td style="border: 1px solid #000" colspan="4" class="border-0 p-3"
                                            style="width: 38%;">
                                            <table class="border-0 w-100">
                                                <tbody style="border: 1px solid #000">
                                                    <tr>
                                                        <td class="s-label py-2">
                                                            Government Issued ID(i.e.Passport,
                                                            GSIS, SSS, PRC,
                                                            Driver's License, etc.)<br> PLEASE INDICATE ID Number and
                                                            Date of Issuance
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td style="border: 1px solid #000" style="width: 30%;">
                                                            Government Issued ID:</td>
                                                    </tr>
                                                    <tr>
                                                        <td style="border: 1px solid #000" style="width: 30%;">
                                                            ID/License/Passport No.:</td>
                                                    </tr>
                                                    <tr>
                                                        <td style="border: 1px solid #000" style="width: 30%;">
                                                            Date/Place of Issuance:</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </td>
                                        <td style="border: 1px solid #000" colspan="4" class="border-0 p-3"
                                            style="width: 38.5%;">
                                            <table class="border-0 w-100">
                                                <tbody class="border-0 text-center" style="border: 1px solid #000">
                                                    <tr>
                                                        <td class="py-4"></td>
                                                    </tr>
                                                    <tr>
                                                        <td class="s-label">
                                                            <small>Signature (Sign inside the
                                                                box)</small>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td></td>
                                                    </tr>
                                                    <tr>
                                                        <td class="s-label">
                                                            <small>Date Accomplished</small>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </td>
                                        <td style="border: 1px solid #000" colspan="5" class="border-0 p-3">
                                            <table class="border-0 w-100">
                                                <tbody class="border-0" style="border: 1px solid #000">
                                                    <tr>
                                                        <td class="py-5"></td>
                                                    </tr>
                                                    <tr>
                                                        <td class="s-label text-center">Right Thumbmark</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </td>
                                    </tr>
                                </tbody>

                                <tbody class="table-body">
                                    <tr>
                                        <td colspan="13" class="text-center py-2">
                                            SUBSCRIBED AND SWORN to before me this <input type="text"
                                                class="border-top-0 border-left-0 border-right-0"
                                                style="width: 25%;">
                                            , affiant
                                            exhibiting his/her validly issued government ID as indicated above.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="13" class="py-5">
                                            <table class="w-25 mx-auto">
                                                <tbody>
                                                    <tr>
                                                        <td class="py-5"></td>
                                                    </tr>
                                                    <tr>
                                                        <td class="s-label text-center">Person Administering Oath</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </td>
                                    </tr>
                                </tbody>

                            </table>
                        </td>
                    </tr>
                </tbody>

                <!-- End of References -->



            </table>
        </form>
    </div>
</body>

</html>
