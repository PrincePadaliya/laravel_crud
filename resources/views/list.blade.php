<h1 style="text-align: center">Employee list </h1>

<table border="1" id="customers">
    <tr style="background-color: #04AA6D">
        <td>id</td>
        <td>firstname</td>
        <td>lastname</td>
        <td>email</td>
        <td>phone</td>
        <td>companyname</td>
        <td>companyemail</td>
        <td>companylogo</td>
        <td>companywebsite</td>
        <td>Operations</td>
    </tr>


@foreach($employees as $member)
    <tr>
        <td>{{$member['id']}}</td>
        <td>{{$member['firstname']}}</td>
        <td>{{$member['lastname']}}</td>
        <td>{{$member['email']}}</td>
        <td>{{$member['phone']}}</td>
        <td>{{$member['companyname']}}</td>
        <td>{{$member['companyemail']}}</td>
        <td>{{$member['companylogo']}}</td>
        <td>{{$member['companywebsite']}}</td>
        <td>
        <a href={{"edit/".$member['id']}}><button class="button button2">Edit</button></a>
        <a href={{"delete/".$member['id']}}><button class="button button3">Delete</button></a>
        
        
        </td>
        
    </tr>
@endforeach

</table>

<div style="margin-left: 40rem;
    padding: 3rem;">
    {{$employees->links()}}
    
</div>

<style>
    .w-5{
        display: none
    }

    .button {
        border-radius: 8px;
  background-color: #4CAF50; /* Green */
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
}

.button2 {background-color: #1a73e8;}
.button3 {background-color: #f8291a;}

#customers {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #04AA6D;
  color: white;
}

</style>