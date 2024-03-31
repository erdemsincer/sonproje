@extends("front.layouts.master")

@section("content")
    <form method="post" action="{{route("notes_addNote")}}">
        @csrf
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Başlık</label>
            <input type="text" name="baslik" Lütfen Not Başlığını Giriniz" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">

        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">İçerik</label>
            <textarea class="form-control" name="icerik" id="exampleFormControlTextarea1" rows="3"></textarea>
        </div>

        <button type="submit" class="btn btn-success">Gönder</button>
    </form>

@endsection

