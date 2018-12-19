@extends('layouts.app')


@section('title')
	Pembayaran
@endsection

@section('content')
<div class="container">
    <div class="logobig">
		<a style="cursor: pointer;"><img src="/image/logo3.png"></a>
	</div>
    <div class="main-content"
        <!-- You only need this form and the form-validation.css -->
        <form class="form-validation" method="post" action="#">
            <div class="form-title-row">
                <h1>Form Pembayaran</h1>
            </div>
            <div class="form-row form-input-name-row">
                <label>
                    <span>Nominal</span>
                    <input type="text" name="nominal">
                </label>
                <span class="form-valid-data-sign"><i class="fa fa-check"></i></span>
                <span class="form-invalid-data-sign"><i class="fa fa-close"></i></span>
                <span class="form-invalid-data-info"></span>
            </div>
            <div class="form-row form-input-name-row">
                <label>
                    <span>Phone</span>
                    <input type="text" name="hp">
                </label>
                <span class="form-valid-data-sign"><i class="fa fa-check"></i></span>
                <span class="form-invalid-data-sign"><i class="fa fa-close"></i></span>
                <span class="form-invalid-data-info"></span>
            </div>
            <div class="form-row">
                <label>
                    <span>Pembayaran</span>
                    <select name="dropdown">
                        <option>Pilih salah satu</option>
                        <option>BRI</option>
                        <option>BNI</option>
                        <option>BCA</option>
                        <option>MANDIRI</option>
                        <option>DANAMON</option>
                        <option>PERMATA BANK</option>
                        <option>PANIN</option>
                        <option>BANK JATIM</option>
                    </select>
                </label>
            </div>
            <div class="form-row">
                <label class="form-checkbox">
                    <span>Donasi sebagai anonim</span>
                    <input type="checkbox" name="checkbox" checked>
                </label>
            </div>
            <div class="form-row">
                <button type="next">Next</button>
            </div>
        </form>
    </div>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script>
        $(document).ready(function() 
        {
            // Here is how to show an error message next to a form field
            var errorField = $('.form-input-name-row');
            // Adding the form-invalid-data class will show
            // the error message and the red x for that field
            errorField.addClass('form-invalid-data');
            errorField.find('.form-invalid-data-info').text('Wajib diisi');
            // Here is how to mark a field with a green check mark
            var successField = $('.form-input-email-row');
            successField.addClass('form-valid-data');
        });
    </script>
</div>
@endsection

