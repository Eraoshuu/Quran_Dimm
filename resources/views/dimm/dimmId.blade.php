@extends('dimm')

@section('kamuu')

<div class="jumbotronn" id="home" style="margin-top: 130px; margin-bottom:20;">
    <div class="dark">
        <div class="text-center">
            <h2 class="about text-center" id="about">{{$response->name_translations->ar}}</h2>
        </div>
    </div>
</div>
<br>
<center>

    
    <div class="card text-center" style="width: 50%;">
        <div class="card-header">
          <strong>Al-Fatihah</strong>
        </div>
        <div class="card-body">
            <p class="card-text">
                <table style="text-align: left; margin:20px;">
                    <tr>
                        <td>Arti</td>
                        <td>:</td>
                        <td>Pembukaan</td>
                    </tr>
                    <tr>
                        <td>Nomor Surah</td>
                        <td>:</td>
                        <td>1</td>
                    </tr>
                    <tr>
                        <td>Banyak Ayat</td>
                        <td>:</td>
                        <td>7</td>
                    </tr>
                    <tr>
                        <td>Tipe Surah</td>
                        <td>:</td>
                        <td>Makkiyah</td>
                    </tr>
                </table>
            </p>
         
        </div>
        <div class="card-footer text-body-secondary">
          <div class="card-footer text-muted">
            <strong style="margin-bottom: 50px;"><b><u>Dengarkan Murottal</u></b></strong>
            <figure>
                <br>
                @foreach ($response->recitations as $audio)
                    
                
                <p>{{$response->name}}</p>
                <audio src="{{$audio->audio_url}}" controls></audio>
                @endforeach
            </figure>
            
          </div>
        </div>
    </div>
</center>
<br>

<table class="table table-striped" style="width: 1300px; margin-left: -100px;">
    <thead style="--bs-table-bg: aquamarine;">
        <tr>
            <td colspan="4" style="background-color: aquamarine; color:black; text-align:center" >
                <strong>Ayat</strong>
            </td>
        </tr>
      <tr>
        <th scope="col">Ayat</th>
        <th scope="col">Lafazh</th>
        <th scope="col">Bahasa English</th>
        <th scope="col">Bahasa Indonesia</th>
      </tr>
    </thead>
    <tbody>

      @foreach ($response->verses as $ayat)
          
      
      <tr>
        <td>{{$ayat->number}}</td>
        <td>ِ{{$ayat->text}}</td>
      <td>{{$ayat->translation_en}}</td>
        <td>{{$ayat->translation_id}}</td>
     
      </tr>
      @endforeach
      
      
     
    </tbody>
  </table>

  <div class="card text-center" >
    <div class="card-header">
      <strong>Tafsir Al-Fatihah</strong>
    </div>
    <div class="card-body">
      <p class="card-text">
        <table style="text-align: left; margin:20px">
          <tr>
            <td>Penerbit Tafsir</td>
            <td>:</td>
            <td>Kemenag</td>
          </tr>
          <tr>
            <td>Keterangan</td>
            <td>:</td>
            <td>Aplikasi Quran Kementrian Agama Republik Indonesia</td>
          </tr>
        </table>
      </p>
     
    </div>
   
      <div class="card-footer"></div>
        <div class="card-body">
          @foreach ($response->tafsir->id->kemenag->text as $key => $ayat)      
          <strong>Ayat : {{$key}}</strong>
          <br>
          <p style="text-align: justify">Tafsir : {{$ayat}}</p>
          <hr>
          @endforeach
        </div>
       <a href="/dimm" class="btn btn-primary">balikluu</a>
       
      
    
</div>

@endsection