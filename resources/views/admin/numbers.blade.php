@extends('admin.layouts.layout')

@section('numbers')
    active
@endsection

@section('content')


    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
    <!-- MAIN -->
    <main>

        <div class="table-data">
            <div class="order">
                <div class="head">
                    <h3>Raqamlar</h3>


                </div>

                <form class="create__inputs" action="{{ route('admin.numbers.update', $number->id) }}" method="POST">
                    @csrf
                    @method('PUT')

                    <strong> O`quvchular soni :</strong>
                    <input type="number" name="num1" value="{{ $number->num1 }}" class="form-control">
                    @error('num1')
                        {{ $message }}
                    @enderror
                    <br>
                    <strong> O`qitivchilar :</strong>
                    <input type="number" name="num2" value="{{ $number->num2 }}" class="form-control">
                    @error('num2')
                        {{ $message }}
                    @enderror
                    <br>
                    <strong> Abutrentlar soni :</strong>
                    <input type="number" name="num3" value="{{ $number->num3 }}" class="form-control">
                    @error('num3')
                        {{ $message }}
                    @enderror
                    <br>
                    <strong> Mustaqil tadqiqotchilar :</strong>
                    <input type="number" name="num4" value="{{ $number->num4 }}" class="form-control">
                    @error('num4')
                        {{ $message }}
                    @enderror
                    <br>
                    <br>

                    <input type="submit" value="O'zgartirish">

                </form>
            </div>

        </div>
    </main>
    <!-- MAIN -->
@endsection
