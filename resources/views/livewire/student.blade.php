<div>
    <button wire:click.prevent="addRow" class="btn btn-primary float-right">ADD</button>



    <form action="/save" method="POST" enctype="multipart/form-data">
        @csrf
        {{ csrf_field() }}

        <table class="table-bordered table-responsive text-center">
            <tr>
                <th>ID</th>
                <th>NAME</th>
                <th>COUNTRY</th>
                <th>STATE</th>
                <th>IMAGE</th>
            </tr>

            @foreach ($arr as $index => $d)


            <tr>
                <td>
                    {{$index+1}}

                </td>

                <td>
                    <input class="form-control" type="text"  name="arr[{{$index}}][name]" wire:model="arr.{{$index}}.name">
                
                </td>
                <td>
             

                    <select name="arr[{{$index}}][cname]" wire:model="selectedCountry.{{$index}}">

                    
                 

                        @foreach ($country as $key => $data)
                        <option value="{{$data->countryid}}">{{$data->countryname}}</option>

                        @endforeach
                    </select>

                </td>
                <td>
                    {{$arr[$index]['cname']}}
                
                    <select   name="arr[{{$index}}][sname]" wire:model="arr.{{$index}}.sname" >

                        @foreach ($state as $key => $data)
                        @if($data->countryid==$selectedCountry[$index])
                        <option value="{{$data->stateid}}">{{$data->statename}}</option>
                     @endif
                        @endforeach

                    </select>

                </td>
                <td>

                    <input type="file" name="arr[{{$index}}][iname]" wire:model="arr.{{$index}}.iname">

                </td>




            </tr>

            @endforeach

        </table>

        <input class="btn btn-primary float-right" value="SAVE" type="submit">

    </form>


</div>


</div>