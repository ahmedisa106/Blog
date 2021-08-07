<input data-id="{{$row->id}}" class="activeBtn" type="checkbox" {{$row->active==1?'checked':''}}>
<script>
    $('input[type="checkbox"]').on('click', function () {
        alert('asd')
    })

</script>
