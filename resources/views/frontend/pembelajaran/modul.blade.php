@extends('frontend.layout')

@section('content')
    
        <section id="pembelajaran">
        <div class="pembelajaran tmain-container">
            <div class="judul-modul">
                <h1>{{ $pembelajaran->{'judul-modul'} }}</h1>
            </div>
            <div class="pembelajaran-info">
                <p>{!!$pembelajaran->{'kontent-modul'}!!}
                </p>

                <!-- <embed src="/pdf/modul1.pdf" width="100%" height="600" frameborder="0" scrolling="no"></embed> -->

                <!-- <div id="viewer" style="width: 100%; height: 1000px;"></div>
                <script type="text/javascript" src="https://cloudpdf.io/viewer.min.js"></script>
                <script>
                    const config = {
                        documentId: '640c4074-ce8f-49ae-91db-88d2de0cfe17',
                        darkMode: true,
                    };
                    CloudPDF(config, document.getElementById('viewer')).then((instance) => {

                    });
                </script> -->
                {!! $pembelajaran->viedo !!}

                {!! $pembelajaran->pdf !!}

                {{-- <style>
                    .pdfobject-container { height: 500px; border: 1px solid #ccc; }
                </style>
                <div id="my-pdf"></div>
                <script src="https://unpkg.com/pdfobject"></script>
                <script>PDFObject.embed("{{ Storage::url($pembelajaran->pdf) }}", "#my-pdf");</script> --}}
                
                

                {{-- <iframe src="{{ Storage::url($pembelajaran->pdf) }}" width="500" height="600" frameborder="0" allowfullscreen></iframe> --}}


                {{-- <div style="position: relative; width: 100%; height: 0; padding-top: 141.4286%;
                    padding-bottom: 0; box-shadow: 0 2px 8px 0 rgba(63,69,81,0.16); margin-top: 1.6em; margin-bottom: 0.9em; overflow: hidden;
                    border-radius: 8px; will-change: transform;">
                    <iframe loading="lazy" style="position: absolute; width: 100%; height: 80%; top: 0; left: 0; border: none; padding: 0;margin: 0;"
                        src="https:&#x2F;&#x2F;www.canva.com&#x2F;design&#x2F;DAGAVjuPeU8&#x2F;g8SJjh_164Ow23o7x8rpoA&#x2F;view?embed" allowfullscreen="allowfullscreen" allow="fullscreen">
                    </iframe>
                </div>
                <a href="https:&#x2F;&#x2F;www.canva.com&#x2F;design&#x2F;DAGAVjuPeU8&#x2F;g8SJjh_164Ow23o7x8rpoA&#x2F;view?utm_content=DAGAVjuPeU8&amp;utm_campaign=designshare&amp;utm_medium=embeds&amp;utm_source=link" target="_blank" rel="noopener"></a> --}}                
            </div>
        </div>

    </section>

@endsection