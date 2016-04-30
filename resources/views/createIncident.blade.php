@extends('_layout')


@section('content')


    <div class="panel panel-primary">
        <div class="panel-heading">
            <h1 class="text-center">Základné údaje o požiari - pridávanie dát</h1>
        </div>
        <div class="panel-body bg-info">



    <form class="form-horizontal">

        <div class="form-group">
            <label class="col-sm-2 control-label">Evidečné číslo udalosti</label>
            <div class="col-sm-10">
                <p class="form-control-static">
                    <input type="number">

                </p>
            </div>
        </div>

        <div class="form-group">
            <label class="col-sm-2 control-label">Deň a čas ohlásenia</label>
            <div class="col-sm-10">
                <p class="form-control-static">
                    <input type="date">
                    <input type="time">
                </p>
            </div>
        </div>


        <div class="form-group">
            <label class="col-sm-2 control-label">Deň a čas spozorovania</label>
            <div class="col-sm-10">
                <p class="form-control-static">
                    <input type="date">
                    <input type="time">
                </p>
            </div>
        </div>


        <div class="form-group">
            <label class="col-sm-2 control-label">Adresa</label>
            <div class="col-sm-10">
                <p class="form-control-static">
                    <textarea class="form-control" rows="2" placeholder="Vyplňiť adresu..."></textarea>
                </p>
            </div>
        </div>

                <div class="form-group">
                    <label for="insurance" class="col-sm-2 control-label">Poisťovňa</label>
                    <div class="col-sm-10">

                        <div class="radio">
                            <label>
                                <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked>
                                žiadna
                            </label>
                        </div>
                        <div class="radio">
                            <label>
                                <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">
                                jedna alebo viac poisťovní
                            </label>
                        </div>



                        <p class="form-control-static">

                            <select multiple class="form-control" name="insuranceCompanies[]" id="insurance" readonly>
                                @foreach($insuranceCompanies as $company)
                                    <option value="{{ $company->id }}">{{ $company->name }}</option>
                                @endforeach
                            </select>
                        </p>
                    </div>
                </div>


                <div class="form-group">
                    <label class="col-sm-2 control-label">Vlastníctvo</label>
                    <div class="col-sm-10">
                        <p class="form-control-static">

                            <select class="form-control" name="ownerships[]">
                                @foreach($ownerships as $ownership)
                                        <option value="{{ $ownership->id }}">({{ $ownership->code }}) {{ $ownership->name }}</option>
                                @endforeach

                            </select>
                        </p>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-2 control-label">Určenie škody</label>
                    <div class="col-sm-10">
                        <p class="form-control-static">
                            <select class="form-control" name="damageSpecifications[]">
                                @foreach($damageSpecifications as $specification)
                                    <option value="{{ $specification->id }}">({{ $specification->code }}) {{ $specification->name }}</option>
                                @endforeach
                            </select>
                        </p>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-2 control-label">Charakter škôd</label>
                    <div class="col-sm-10">
                        <p class="form-control-static">
                            <select class="form-control" name="damageTypes[]">
                                @foreach($damageTypes as $type)
                                    <option value="{{ $type->id }}">({{ $type->code }}) {{ $type->name }}</option>
                                @endforeach
                            </select>
                        </p>
                    </div>
                </div>

            <div class="form-group">
                    <label class="col-sm-2 control-label">Odvetvie ekonomickej činnosti</label>
                    <div class="col-sm-10">
                        <p class="form-control-static">
                            <select class="form-control" name="industryTypes">
                                @foreach($industryTypes as $type)
                                    @if($type["id"] == "02" || $type["id"] == "08" || $type["id"] == "17" || $type["id"] == "26" ||
                                    $type["id"] == "41" || $type["id"] == "49" || $type["id"] == "56" || $type["id"] == "65")
                                    <option value="{{ $type->id }}" disabled class="bg-info text-info">{{ $type->name }}</option>
                                    @else
                                        <option value="{{ $type->id }}">({{ $type->code }}) {{ $type->name }}</option>
                                    @endif
                                @endforeach

                            </select>
                        </p>
                    </div>
                </div>


        <div class="form-group">
            <label class="col-sm-2 control-label">Škoda</label>
            <div class="col-sm-10">
                <p class="form-control-static">
                    Priama <input type="number">
                    <br><br>
                    Následná <input type="number">
                    <br><br>
                    Uchránená hodnota <input type="number">

                </p>
            </div>
        </div>


<div class="text-right">
    <button type="button" class="btn btn-primary btn-lg">Uložiť záznam</button>
</div>
</form>

    </div>

@endsection