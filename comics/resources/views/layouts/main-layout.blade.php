<!DOCTYPE html>
< html  lang = " en " >
< testa >
    < meta  set di caratteri = " UTF-8 " >
    < meta  name = " viewport "  content = " larghezza = larghezza dispositivo, scala iniziale = 1.0 " >
    < meta  http-equiv = " X-UA-Compatible "  content = " ie=edge " >
    @rendimento ( ' titolo ' )

    <!-- Google Fonts -->
    < link  rel = " preconnect "  href = " https://fonts.gstatic.com " >
    < link  href = " https://fonts.googleapis.com/css2?family=PT+Sans+Narrow:wght@400;700&display=swap "  rel = " foglio di stile " >
    <!-- Carattere fantastico -->
    < link  rel = " foglio di stile "  href = " https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css " >
    <!-- CSS -->
    < link  rel = " foglio di stile "  href = "  {{ asset ( ' /css/app.css ' ) } } "   >

</ testa >
< corpo >

    @include ( ' components.header ' )

    @rendimento ( ' principale ' )

    @include ( ' components.footer ' )
</ corpo >
</ html >
