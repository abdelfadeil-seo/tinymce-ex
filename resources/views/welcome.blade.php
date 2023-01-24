<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Tiny MCE</title>
    <script src="{{ asset('assets/tinymce/tinymce.min.js') }}"></script>    
    <script>
        tinymce.init({
            selector: '#mytextarea',
            plugins: [
            'a11ychecker','advlist','advcode','advtable','autolink','checklist','export',
            'lists','link','image','charmap','preview','anchor','searchreplace','visualblocks',
            'powerpaste','fullscreen','formatpainter','insertdatetime','media','table','help','wordcount'
            ],
            toolbar: 'undo redo | formatpainter casechange blocks | bold italic backcolor | ' +
            'alignleft aligncenter alignright alignjustify | ' +
            'bullist numlist checklist outdent indent | removeformat | a11ycheck code table help'
        });
    </script>
     
    </head>
    <body>
        <form method="post">
            <textarea id="mytextarea">Nofal SEO</textarea>
        </form>
    </body>
    
</html>
