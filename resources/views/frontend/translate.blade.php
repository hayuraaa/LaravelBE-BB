@extends('frontend.layout')

@section('content')

<div class="iframe-container">
    <iframe src="https://www.bilikbecakap.com" frameborder="0" scrolling="auto"></iframe>
</div>
 

{{-- <section id="penerjemah">
    <div class="penerjemah main-container">
        <div class="penerjemah-right">
            <img src="{{ asset('FE-BB/images/penerjemah.png')}}" alt="penerjemah">
        </div>

        <div class="penerjemah-left">
            <form id="translation-form" method="POST" action="{{ route('translate') }}" class="penerjemah-form">
                @csrf
                <div>
                    <label for="senyubukText">Masukkan Teks Melayu Belitung:</label>
                    <textarea name="senyubukText" id="senyubukText" cols="25" rows="5"></textarea>
                </div>
                <div>
                    <label for="isTranslationToIndo">Arah Terjemahan:</label><br>
                    <select id="isTranslationToIndo" name="isTranslationToIndo">
                        <option value="1">Dari Melayu Belitung ke Bahasa Indonesia</option>
                        <option value="0">Dari Bahasa Indonesia ke Melayu Belitung</option>
                    </select>
                </div>
                <div id="translation-result">
                    <label  for="indonesiaText">Hasil Terjemahan Bahasa Indonesia:</label>
                    <textarea name="message"  cols="25" rows="5"></textarea>
                </div>
                <div>
                    <button type="submit" class="btn-submit">Terjemahkan</button>
                </div>
            </form>
        </div>
    </div>
</section>

<script>

    document.getElementById('translation-form').addEventListener('submit', function(event) {
        event.preventDefault();
        
        const senyubukText = document.getElementById('senyubukText').value; // Perbaiki penulisan
        const isTranslationToIndo = document.getElementById('isTranslationToIndo').value;

        const xhr = new XMLHttpRequest();
        xhr.open("POST", "{{ route('translate') }}", true);
        xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
        xhr.setRequestHeader("X-CSRF-Token", '{{ csrf_token() }}');

        xhr.onreadystatechange = function () {
            if (xhr.readyState === 4 && xhr.status === 200) {
                const response = JSON.parse(xhr.responseText);
                document.getElementById('translation-result').innerHTML = response.indonesiaText; // Gunakan value untuk textarea
            }
        };

        const params = 'senyubukText=' + encodeURIComponent(senyubukText) + "&isTranslationToIndo=" +encodeURIComponent(isTranslationToIndo);
        xhr.send(params);
    });
</script> --}}

@endsection


{{-- <script>

    document.getElementBYId('tranlation-from')

</script> --}}