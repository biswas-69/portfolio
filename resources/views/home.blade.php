<!DOCTYPE html>
<html>
<head>
    <title>Profile Editor</title>
    <style>
        
        #preview_section{
            display:flex;
            justify-content:space-evenly;
        }
        .hidden { 
            display: none; 
            
        }
        .image{
            hieght:200px;
        }
        #preview_section{
            border:2px solid black;
            padding:20px;
            /* display:inline-block; */
        }
        #edit_form_section{
            border:2px solid black;
            padding:20px;
            margin-top:20px;
            

        }
        
        
        .form-group {  
            margin-bottom: 10px; 
            
        }
        .image{
            border:2px solid black;
            display:inline-block;
        }
        textarea{
            height:100px;
            width:300px;
            margin-top:5px;
        }
        #preview_two{
            border:2px solid black;
            padding:10px;
            display:inline-block;
               width:500px;
            text-align:justify;
        }
.preview-text {
    white-space: pre-wrap;
    word-wrap: break-word;
}

    </style>
</head>
<body>

@if(session('success'))
    <p style="color: green">{{ session('success') }}</p>
@endif



<!-- ✅ Preview Section -->
<div id="preview_section">
    
    <div class="image"><img id="preview_photo"
         src="{{ $profile->photo_path ? asset('storage/' . $profile->photo_path) : '#' }}"
         width="150"
         style="{{ $profile->photo_path ? '' : 'display:none;' }}"><br><br>
    </div>
 
    <div class="main-edit">
     <div class="user-name"><h2 id="preview_one">{{ $profile->field_one }}</h2></div>
     <div><p id="preview_two" class="preview-text">{{ $profile->field_one }}</p></div>
   

     <div> <button onclick="enableEdit()">Edit</button></div>
     </div>
</div>

<!-- ✅ Edit Form Section (Initially Hidden) -->
<div id="edit_form_section" class="hidden">
    <form action="{{ route('profile.update') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="form-group">
            <label>Photo:</label>
            <input type="file" name="photo" id="photo_input"><br>
            <img id="photo_preview"
                 src="{{ $profile->photo_path ? asset('storage/' . $profile->photo_path) : '#' }}"
                 width="150"
                 style="{{ $profile->photo_path ? '' : 'display:none;' }}">
        </div>

        <div class="form-group">
         <div><label>Field One:</label></div>
         <div><textarea name="field_one" id="field_one" rows="2">{{ $profile->field_one }}</textarea><div>

        </div>
        <div class="form-group">
          
        <div><label>Field Two:</label></div>
        <div><textarea name="field_two" id="field_two" rows="2">{{ $profile->field_two }}</textarea></div>
        </div>
        <button type="submit">Save</button>
    </form>
</div>



</body>
</html>
