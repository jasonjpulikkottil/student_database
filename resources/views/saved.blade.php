<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css">
@livewireStyles
</head>

<body>

<table class="table-bordered table-responsive text-center">
    <tr>
        <th>ID</th>
        <th>NAME</th>
        <th>COUNTRY</th>
        <th>STATE</th>
        <th>IMAGE</th>
    </tr>
    @foreach ($student as $key => $data)
<tr>
    <td> {{$data->id}} </td>
    <td> {{$data->name}} </td>
    <td> 
 

    @foreach($country as $keyy=>$object)
             @if($object->countryid== $data->countryid) 
             {{ $object->countryname }}
             @endif
              @endforeach


    </td>
    <td> 
        

    @foreach($state as $keyy=>$object)
             @if($object->stateid== $data->stateid) 
             {{ $object->statename }}
             @endif
              @endforeach


    </td>
    <td>
    <img class="img-fluid h-100" width="50" height="50" src="data:image/png;base64,{{chunk_split(base64_encode($data->image))}}">
</td>
</tr>

@endforeach
</table>

@livewireScripts
</body>
</html>
