@extends('dimm')

@section('kamuu')
<div class="container" id="home" style="margin-top: 140px; margin-bottom: 20;">
    <div class="bg-info-subtle">
        <div class="text-center font-weight-bold">
            <h2 class="about text-center" id="about" style="color:black">Daftar Surat</h2>
        </div>
    </div>
</div>
    

<table class="table table-striped" style="width: 1300px; margin-left: -100px;">
    <thead style="--bs-table-bg: aquamarine;">
      <tr>
        <th scope="col">No</th>
        <th scope="col">Nama Surat</th>
        <th scope="col">Nama Latin</th>
        <th scope="col">Arti</th>
        <th scope="col">Jumlah Ayat</th>
        <th scope="col">Tempat Turun</th>
        <th scope="col">Tipe</th>
        <th scope="col">Audio</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($response as $quran)
          
      
      <tr>
        <th scope="row">{{ $quran->number_of_surah}}</th>
        <td>{{$quran->name_translations->ar}}<br>
            <a href="/dimm/{{$quran->number_of_surah}}">
                <button class="btn btn-light btn-sm btn-menu">Lihat Surat</button>
            </a>

        </td>
        <td>{{$quran->name}}</td>
        <td>{{$quran->name_translations->id}}</td>
        <td>{{$quran->number_of_ayah}}</td>
        <td>{{$quran->place}}</td>
        <td style="text-align: justify">{{$quran->type}}</td>
        <td>
            <figure>
                <figcaption>Dengarkan Murottal</figcaption>
                <audio src="{{$quran->recitation}}" controls></audio>
            </figure>
        </td>
        
      </tr>
      
      @endforeach
     
    </tbody>
  </table>

@endsection