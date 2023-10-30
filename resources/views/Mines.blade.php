<h1>Les mines</h1>
<table>
    <tbody>       
        <tr class="titre">
            <td>N°</td>
            <td>Mine</td>
            <td>Latitude</td>
            <td>Longitude</td>
            <td>Concession</td>
        </tr>
        @foreach($mines as $mine)
        <tr>
            <td>{{$loop->index+1}}</td>
            <td>{{$mine->name}}</td>
            <td>{{$mine->latitude}}</td>
            <td>{{$mine->longitude}}</td>
            <td>{{$mine->concession_id}}</td>
        </tr>
    </tbody>
    @endforeach
</table>