@extends('master')
@section('konten')

	<h3>Data Blueray</h3>
    <a class="btn btn-danger mb-md-3" href="/blueray"> Kembali</a>
	<br/>
	<br/>
    @foreach ($blueray as $p)
	<form action="/blueray/store" method="view">
		{{ csrf_field() }}

        <div class="row">
            <div class="col-sm-4 border">
            {{-- tambahin images disini bang --}}
            </div>

            <div class="col-sm-8">
                <div class="form-group row">
                    <label class="control-label col-sm-2" >Merk Blueray</label>
                    <div class="col-sm-10">
                        <output type="text" id="merkblueray" name="merkblueray" required="required">
                            : {{ $p->merkblueray }}
                        </output>
                    </div>
                </div>

                <div class="form-group row">
                    <label class="control-label col-sm-2" >Stock Blueray</label>
                    <div class="col-sm-10">
                        <output type="text" id="stockblueray" name="stockblueray" required="required">
                            : {{ $p->stockblueray }}
                        </output>
                    </div>
                </div>

                 <div class = "col-sm-2 align-items-center mx-auto">
                       <a href='/blueray' class = "btn btn-primary btn-block">OK</a>
                </div>
            </div>
        </div>
	</form>
    @endforeach
@endsection
