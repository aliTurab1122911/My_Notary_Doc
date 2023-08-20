
 <!--1o3ri*XGzh~K7NuhthP*~~vwRKAHTA           public key-->
 
<!DOCTYPE html>
<html lang="en">
<head>
  <!-- utf-8 is required for JS Plugin default fonts -->
  <meta charset="utf-8" />
  <!--<meta name=“viewport” content=“width=device-width, initial-scale=1.0">-->
  <script src="https://static.vouched.id/widget/vouched-2.0.0.js"></script>
  <script type='text/javascript'>

    (function() {
      var vouched = Vouched({
                          
        appId: "",
  
        crossDevice: true,
        crossDeviceQRCode: true,
        crossDeviceSMS: true,
        onInit: ({token, job}) => {
          console.log('initialization');
        },
              
      
        onSubmit: ({stage, attempts, job}) => {

        },
        
     
        onDone: (job) => {
       
          console.log("Scanning complete", { token: job.token });

          fetch(`/1o3ri*XGzh~K7NuhthP*~~vwRKAHTA/idv?job_token=${job.token}`);


        
          if( job.result.success){
            window.location.replace("redirect.php");
          }else{
           window.location.replace("redi2.php");
          }
        },
        onSurveyDone: (job) => {
       
        },       
        
      
        onCamera: ({hasCamera, hasPermission}) => {

        },
        
     
        onCameraEvent:(cameraEvent) => {
        
        },
        

        theme: {
          name: 'avant',
        },
      });
      vouched.mount("#vouched-element");
    })();

  </script>
</head>
<body>
  <div id='vouched-element' style="height: 100%">
</body>
</html>    

