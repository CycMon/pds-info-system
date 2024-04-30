<div id="survey" class="tab-pane fade">
    <h3 class="text-center">Survey</h3>
    <p class="text-center">Here you can view and edit voluntary works.</p>
    {{-- <livewire:survey.survey-list :personalInformationId="$pds->id" /> --}}
    <form action="{{ route('pds.updateSurvey', $pds->id) }}" method="post">
        @csrf
        @method('patch')
        <div>
            <div class="row">
                <div class="col-md-12">
                    <label>
                        1. Are you related by consanguinity or affinity to the appointing or recommending authority, or
                        to
                        the
                        chief of
                        bureau or office or to the person who has immediate supervision over you in the Office, Bureau
                        or
                        Department
                        where you will be apppointed,
                    </label>
                    <label class="mt-4">
                        a. within the third degree?
                    </label>
                    <div class="d-flex gap-3">

                        <div class="form-check">
                            <input class="form-check-input @error('answer_1') is-invalid @enderror" type="radio"
                                id="answer_1_yes" name="answer_1" value="1"
                                {{ $pds->survey->answer_1 == '1' ? 'checked' : '' }}>
                            <label class="form-check-label" for="answer_1_yes">Yes</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input @error('answer_1') is-invalid @enderror" type="radio"
                                id="answer_1_no" name="answer_1" value="0"
                                {{ $pds->survey->answer_1 == '0' ? 'checked' : '' }}>
                            <label class="form-check-label" for="answer_1_no">No</label>
                        </div>
                    </div>

                    <label class="mt-4">
                        b. within the fourth degree (for Local Government Unit - Career Employees)?
                    </label>
                    <div class="d-flex gap-3">

                        <!-- Input Type Radio Button -->
                        <div class="form-check">
                            <input class="form-check-input @error('answer_2') is-invalid @enderror" type="radio"
                                id="answer_2_yes" name="answer_2" value="1"
                                {{ $pds->survey->answer_2 == '1' ? 'checked' : '' }}>
                            <label class="form-check-label" for="answer_2_yes">Yes</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input @error('answer_2') is-invalid @enderror" type="radio"
                                id="answer_2_no" name="answer_2" value="0"
                                {{ $pds->survey->answer_2 == '0' ? 'checked' : '' }}>
                            <label class="form-check-label" for="answer_2_no">No</label>
                        </div>
                        <div>
                            If YES, give details:
                            <textarea type="text" class="form-control  @error('answer_2_detail') is-invalid @enderror" name="answer_2_detail"
                                id="answer_2_detail">{{ $pds->survey->answer_2_detail }}</textarea>
                            @error('answer_2_detail')
                                <x-input-error message="{{ $message }}" />
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="col-md-12 mt-4">
                    <label>
                        2. Have you ever been found guilty of any administrative offense?
                    </label>
                    <div class="d-flex gap-3">

                        <!-- Input Type Radio Button -->
                        <div class="form-check">
                            <input class="form-check-input @error('answer_3') is-invalid @enderror" type="radio"
                                id="answer_3_yes" name="answer_3" value="1"
                                {{ $pds->survey->answer_3 == '1' ? 'checked' : '' }}>
                            <label class="form-check-label" for="answer_3_yes">Yes</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input @error('answer_3') is-invalid @enderror" type="radio"
                                id="answer_3_no" name="answer_3" value="0"
                                {{ $pds->survey->answer_3 == '0' ? 'checked' : '' }}>
                            <label class="form-check-label" for="answer_3_no">No</label>
                        </div>
                        <div>
                            If YES, give details:
                            <textarea type="text" class="form-control  @error('answer_3_detail') is-invalid @enderror" name="answer_3_detail"
                                id="answer_3_detail">{{ $pds->survey->answer_3_detail }}</textarea>
                            @error('answer_3_detail')
                                <x-input-error message="{{ $message }}" />
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="col-md-12 mt-4">
                    <label>
                        3. Have you been criminally charged before any court?
                    </label>
                    <div class="d-flex gap-3">

                        <!-- Input Type Radio Button -->
                        <div class="form-check">
                            <input class="form-check-input @error('answer_4') is-invalid @enderror" type="radio"
                                id="answer_4_yes" name="answer_4" value="1"
                                {{ $pds->survey->answer_4 == '1' ? 'checked' : '' }}>
                            <label class="form-check-label" for="answer_4_yes">Yes</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input @error('answer_4') is-invalid @enderror" type="radio"
                                id="answer_4_no" name="answer_4" value="0"
                                {{ $pds->survey->answer_4 == '0' ? 'checked' : '' }}>
                            <label class="form-check-label" for="answer_4_no">No</label>
                        </div>
                        <div class="row">
                            <div class="col-md-8">
                                If YES, give details:
                                <textarea type="text" class="form-control  @error('answer_4_detail') is-invalid @enderror" name="answer_4_detail"
                                    id="answer_4_detail">{{ $pds->survey->answer_4_detail }}</textarea>
                                @error('answer_4_detail')
                                    <x-input-error message="{{ $message }}" />
                                @enderror
                            </div>
                            <div class="col-md-8">
                                <label for="" class="mt-4">Date Filed</label>
                                <input type="date"
                                    class="form-control @error('answer_4_date_filed') is-invalid @enderror"
                                    name="answer_4_date_filed" id="answer_4_date_filed"
                                    value="{{ $pds->survey->answer_4_date_filed }}">
                                @error('answer_4_date_filed')
                                    <x-input-error message="{{ $message }}" />
                                @enderror
                            </div>
                            <div class="col-md-8">
                                <label for="" class="mt-4">Status of Case/s</label>
                                <input type="text"
                                    class="form-control @error('answer_4_status') is-invalid @enderror"
                                    name="answer_4_status" id="answer_4_status" placeholder="Status"
                                    value="{{ $pds->survey->answer_4_status }}">
                                @error('answer_4_status')
                                    <x-input-error message="{{ $message }}" />
                                @enderror
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 mt-4">
                    <label>
                        4. Have you ever been convicted of any crime or violation of any law, decree, ordinance or
                        regulation by any court or tribunal?
                    </label>
                    <div class="d-flex gap-3">

                        <!-- Input Type Radio Button -->
                        <div class="form-check">
                            <input class="form-check-input @error('answer_5') is-invalid @enderror" type="radio"
                                id="answer_5_yes" name="answer_5" value="1"
                                {{ $pds->survey->answer_5 == '1' ? 'checked' : '' }}>
                            <label class="form-check-label" for="answer_5_yes">Yes</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input @error('answer_5') is-invalid @enderror" type="radio"
                                id="answer_5_no" name="answer_5" value="0"
                                {{ $pds->survey->answer_5 == '0' ? 'checked' : '' }}>
                            <label class="form-check-label" for="answer_5_no">No</label>
                        </div>
                        <div>
                            If YES, give details:
                            <textarea type="text" class="form-control  @error('answer_5_detail') is-invalid @enderror" name="answer_5_detail"
                                id="answer_5_detail">{{ $pds->survey->answer_5_detail }}</textarea>
                            @error('answer_5_detail')
                                <x-input-error message="{{ $message }}" />
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="col-md-12 mt-4">
                    <label>
                        5. Have you ever been separated from the service in any of the following modes: resignation,
                        retirement, dropped from the rolls, dismissal, termination, end of term, finished contract or
                        phased out (abolition) in the public or private sector?
                    </label>
                    <div class="d-flex gap-3">

                        <!-- Input Type Radio Button -->
                        <div class="form-check">
                            <input class="form-check-input @error('answer_6') is-invalid @enderror" type="radio"
                                id="answer_6_yes" name="answer_6" value="1"
                                {{ $pds->survey->answer_6 == '1' ? 'checked' : '' }}>
                            <label class="form-check-label" for="answer_6_yes">Yes</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input @error('answer_6') is-invalid @enderror" type="radio"
                                id="answer_6_no" name="answer_6" value="0"
                                {{ $pds->survey->answer_6 == '0' ? 'checked' : '' }}>
                            <label class="form-check-label" for="answer_6_no">No</label>
                        </div>
                        <div>
                            If YES, give details:
                            <textarea type="text" class="form-control  @error('answer_6_detail') is-invalid @enderror" name="answer_6_detail"
                                id="answer_6_detail">{{ $pds->survey->answer_6_detail }}</textarea>
                            @error('answer_6_detail')
                                <x-input-error message="{{ $message }}" />
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="col-md-12 mt-4">
                    <label>
                        6. Have you ever been a candidate in a national or local election held within the last year
                        (except Barangay election)?
                    </label>
                    <div class="d-flex gap-3">

                        <!-- Input Type Radio Button -->
                        <div class="form-check">
                            <input class="form-check-input @error('answer_7') is-invalid @enderror" type="radio"
                                id="answer_7_yes" name="answer_7" value="1"
                                {{ $pds->survey->answer_7 == '1' ? 'checked' : '' }}>
                            <label class="form-check-label" for="answer_7_yes">Yes</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input @error('answer_7') is-invalid @enderror" type="radio"
                                id="answer_7_no" name="answer_7" value="0"
                                {{ $pds->survey->answer_7 == '0' ? 'checked' : '' }}>
                            <label class="form-check-label" for="answer_7_no">No</label>
                        </div>
                        <div>
                            If YES, give details:
                            <textarea type="text" class="form-control  @error('answer_7_detail') is-invalid @enderror" name="answer_7_detail"
                                id="answer_7_detail">{{ $pds->survey->answer_7_detail }}</textarea>
                            @error('answer_7_detail')
                                <x-input-error message="{{ $message }}" />
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="col-md-12 mt-4">
                    <label>
                        7. Have you resigned from the government service during the three (3)-month period before the
                        last election to promote/actively campaign for a national or local candidate?
                    </label>
                    <div class="d-flex gap-3">

                        <!-- Input Type Radio Button -->
                        <div class="form-check">
                            <input class="form-check-input @error('answer_8') is-invalid @enderror" type="radio"
                                id="answer_8_yes" name="answer_8" value="1"
                                {{ $pds->survey->answer_8 == '1' ? 'checked' : '' }}>
                            <label class="form-check-label" for="answer_8_yes">Yes</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input @error('answer_8') is-invalid @enderror" type="radio"
                                id="answer_8_no" name="answer_8" value="0"
                                {{ $pds->survey->answer_8 == '0' ? 'checked' : '' }}>
                            <label class="form-check-label" for="answer_8_no">No</label>
                        </div>
                        <div>
                            If YES, give details:
                            <textarea type="text" class="form-control  @error('answer_8_detail') is-invalid @enderror" name="answer_8_detail"
                                id="answer_8_detail">{{ $pds->survey->answer_8_detail }}</textarea>
                            @error('answer_8_detail')
                                <x-input-error message="{{ $message }}" />
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="col-md-12 mt-4">
                    <label>
                        8. Have you acquired the status of an immigrant or permanent resident of another country?
                    </label>
                    <div class="d-flex gap-3">

                        <!-- Input Type Radio Button -->
                        <div class="form-check">
                            <input class="form-check-input @error('answer_9') is-invalid @enderror" type="radio"
                                id="answer_9_yes" name="answer_9" value="1"
                                {{ $pds->survey->answer_9 == '1' ? 'checked' : '' }}>
                            <label class="form-check-label" for="answer_9_yes">Yes</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input @error('answer_9') is-invalid @enderror" type="radio"
                                id="answer_9_no" name="answer_9" value="0"
                                {{ $pds->survey->answer_9 == '0' ? 'checked' : '' }}>
                            <label class="form-check-label" for="answer_9_no">No</label>
                        </div>
                        <div>
                            If YES, give details(country):
                            <textarea type="text" class="form-control  @error('answer_9_detail') is-invalid @enderror" name="answer_9_detail"
                                id="answer_9_detail">{{ $pds->survey->answer_9_detail }}</textarea>
                            @error('answer_9_detail')
                                <x-input-error message="{{ $message }}" />
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="col-md-12 mt-4">
                    <label>
                        9. Pursuant to: (a) Indigenous People's Act (RA 8371); (b) Magna Carta for Disabled Persons (RA
                        7277); and (c) Solo Parents Welfare Act of 2000 (RA 8972), please answer the following items:
                    </label>
                    <label class="mt-4">
                        a. Are you a member of any indigenous group?
                    </label>
                    <div class="d-flex gap-3">

                        <!-- Input Type Radio Button -->
                        <div class="form-check">
                            <input class="form-check-input @error('answer_10') is-invalid @enderror" type="radio"
                                id="answer_10_yes" name="answer_10" value="1"
                                {{ $pds->survey->answer_10 == '1' ? 'checked' : '' }}>
                            <label class="form-check-label" for="answer_10_yes">Yes</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input @error('answer_10') is-invalid @enderror" type="radio"
                                id="answer_10_no" name="answer_10" value="0"
                                {{ $pds->survey->answer_10 == '0' ? 'checked' : '' }}>
                            <label class="form-check-label" for="answer_10_no">No</label>
                        </div>
                        <div>
                            If YES, please specify:
                            <textarea type="text" class="form-control  @error('answer_10_detail') is-invalid @enderror"
                                name="answer_10_detail" id="answer_10_detail">{{ $pds->survey->answer_10_detail }}</textarea>
                            @error('answer_10_detail')
                                <x-input-error message="{{ $message }}" />
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="col-md-12 mt-4">
                    <label>
                        b. Are you a person with disability?
                    </label>
                    <div class="d-flex gap-3">

                        <!-- Input Type Radio Button -->
                        <div class="form-check">
                            <input class="form-check-input @error('answer_11') is-invalid @enderror" type="radio"
                                id="answer_11_yes" name="answer_11" value="1"
                                {{ $pds->survey->answer_11 == '1' ? 'checked' : '' }}>
                            <label class="form-check-label" for="answer_11_yes">Yes</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input @error('answer_11') is-invalid @enderror" type="radio"
                                id="answer_11_no" name="answer_11" value="0"
                                {{ $pds->survey->answer_11 == '0' ? 'checked' : '' }}>
                            <label class="form-check-label" for="answer_11_no">No</label>
                        </div>
                        <div>
                            If YES, please specify ID no:
                            <textarea type="text" class="form-control  @error('answer_11_id') is-invalid @enderror" name="answer_11_id"
                                id="answer_11_id">{{ $pds->survey->answer_11_id }}</textarea>
                            @error('answer_11_id')
                                <x-input-error message="{{ $message }}" />
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="col-md-12 mt-4">
                    <label>
                        . Are you a solo parent?
                    </label>
                    <div class="d-flex gap-3">

                        <!-- Input Type Radio Button -->
                        <div class="form-check">
                            <input class="form-check-input @error('answer_12') is-invalid @enderror" type="radio"
                                id="answer_12_yes" name="answer_12" value="1"
                                {{ $pds->survey->answer_12 == '1' ? 'checked' : '' }}>
                            <label class="form-check-label" for="answer_12_yes">Yes</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input @error('answer_12') is-invalid @enderror" type="radio"
                                id="answer_12_no" name="answer_12" value="0"
                                {{ $pds->survey->answer_12 == '0' ? 'checked' : '' }}>
                            <label class="form-check-label" for="answer_12_no">No</label>
                        </div>
                        <div>
                            If YES, please specify ID no:
                            <textarea type="text" class="form-control  @error('answer_12_id') is-invalid @enderror" name="answer_12_id"
                                id="answer_12_id">{{ $pds->survey->answer_12_id }}</textarea>
                            @error('answer_12_id')
                                <x-input-error message="{{ $message }}" />
                            @enderror
                        </div>
                    </div>
                </div>
                <div>
                    <button type="submit" class="btn btn-primary">Save</button>
                </div>
            </div>
        </div>
    </form>
</div>
