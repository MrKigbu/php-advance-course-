<?php
pushScript("styles")
?>
<style>
    h1 {
        color: red;
    }
</style>
<?php
endPushScript();
section('content');
?>
<h1>Hello world</h1>
<p>
    Lorem ipsum dolor sit amet consectetur, adipisicing elit. 
    Fugiat ad sunt, itaque rerum molestiae repellat quae sit 
    accusamus ex nulla, velit exercitationem rem sapiente expedita 
    accusantium cumque consectetur sint et?
</p>
<?php
endsection();
pushScript ("scripts");
?>
<script>
    console.log("Hello world");
    
</script>
<?php
endPushScript();
extend('layout/app', 'content');
