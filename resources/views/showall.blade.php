<!DOCTYPE html>
<html lang="en">
<head><title>show all</title></head>
<body>
<table>
    <tr>
        <th>Title</th>
        <th>Image</th>
        <th>Actions</th>
    </tr>

    @foreach($image as $var)
        <tr>
            <td><?php echo $var->title;?></td>
            <td><img src="{{ asset("/images/".$var->name)}}" width="100" height="100"></td>
            <td><?php echo link_to("/show/".$var->id, 'View');?></td>
        </tr>
    @endforeach
</table>
<br/><br/>
<?php echo link_to("image", 'Upload record');?>

</body>
</html>


