  (function(window) {
    function triggerCallback(e, callback) {
      if(!callback || typeof callback !== 'function') {
        return;
      }
      var files;
      if(e.dataTransfer) {
        files = e.dataTransfer.files;
      } else if(e.target) {
        files = e.target.files;
      }
      callback.call(null, files);
    }
    function makeDroppable(ele, callback) {
      //var input = document.createElement('input');
      var input = document.getElementById('photoupload');
      /*input.setAttribute('type', 'file');
      input.setAttribute('name', 'photo');
      input.setAttribute('multiple', true);
      input.setAttribute('id', 'photoupload');
      input.setAttribute('data-hasFile', false);
      input.style.display = 'none';*/
      input.addEventListener('change', function(e) {
        triggerCallback(e, callback);
      });
      //ele.appendChild(input);
      
      ele.addEventListener('dragover', function(e) {
        e.preventDefault();
        e.stopPropagation();
        ele.classList.add('dragover');
      });

      ele.addEventListener('dragleave', function(e) {
        e.preventDefault();
        e.stopPropagation();
        ele.classList.remove('dragover');
      });

      ele.addEventListener('drop', function(e) {
        e.preventDefault();
        e.stopPropagation();
        ele.classList.remove('dragover');
        triggerCallback(e, callback);
      });
      
      ele.addEventListener('click', function() {
        input.value = null;
        input.click();
      });
    }
    window.makeDroppable = makeDroppable;
  })(this);
  (function(window) {
    makeDroppable(window.document.querySelector('.demo-droppable'), function(files) {
      //console.log(files);
      //$('#photoupload').attr('data-hasFile', true);
	  document.getElementById('photoupload').setAttribute('data-hasFile', true);
	  var output = document.querySelector('.output');
      //var formData= new FormData();
	  output.innerHTML = '';
	  if(files.length==1){
			$file_limit=1;
			
			
		}else if(files.length==2){
			$file_limit=2;
			
		}else if(files.length==4){
			alert("Please Select Maximum 3 Photos");
			
		}else{
			$file_limit=3;
			
		}
      for(var i=0; i<$file_limit; i++) {
        if(files[i].type.indexOf('image/') === 0) {
          //formData.append('photo['+i+']', files[i]);
		  output.innerHTML += '<img width="300" src="' + URL.createObjectURL(files[i]) + '" style="margin-top: -50%;"/>';
		  
        }
        
      }
	  
	/*$.ajax({
		url:"upload.php",
		method:"POST",
		data:formData,
		contentType:false,
		cache:false,
		processData:false,
		success:function(data){
			//$("#upload_file").html(data);
		}
	})*/	
	  
    });
  })(this);