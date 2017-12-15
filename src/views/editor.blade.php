<script src="{{ asset('vendor/ckeditor/ckeditor.js') }}" type="text/javascript"></script>
<script src="{{ asset('vendor/ckeditor/adapters/jquery.js') }}" type="text/javascript"></script>
<textarea id="{{$name}}" >{{$value}}</textarea>
<script>
    $('#{{$name}}').ckeditor();
</script>
