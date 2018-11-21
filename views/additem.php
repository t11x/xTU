<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bulma.css" />
<div style="background-color:#DBF0FD">
<div class="container" style="padding-top: 100px;">
<span class="title is-2" style="padding-right:10px; padding-top:200px;">Add a place</span>
<div style="margin-left: 10px; margin-top:30px; margin-bottom: 30px;" >
  <img src="https://bulma.io/images/placeholders/128x128.png">
  <img src="https://bulma.io/images/placeholders/128x128.png">
  <img src="https://bulma.io/images/placeholders/128x128.png">
  <img src="https://bulma.io/images/placeholders/128x128.png">
</div>

    <div class="field">
        <div class="control">
            <input class="input is-rounded" type="text" placeholder="Name" autofocus="" style="width:400px; margin-bottom:7px;">
         </div>
    </div>
    <div class="field">
        <div class="control">
            <input class="input is-rounded" type="text" placeholder="Location" autofocus="" style="width:400px; margin-bottom:7px;">
         </div>
    </div>
    <span class="title is-4" style="padding-right:10px;">Type</span>
    <input class="is-checkradio" id="food" type="radio" name="type" checked="checked">
    Food
    <input class="is-checkradio" id="cafe" type="radio" name="type">
    <label for="exampleRadioInline1">Café</label>
    <input class="is-checkradio" id="store" type="radio" name="type">
    <label for="exampleRadioInline1">Store</label>
    <input class="is-checkradio" id="pharmacy" type="radio" name="type">
    <label for="exampleRadioInline1">Pharmacy</label>
    <input class="is-checkradio" id="others" type="radio" name="type">
    <label for="exampleRadioInline1">Others</label>


    <div class="field" style="margin-top:17px; margin-bottom:20px;">
        <div class="control">
            <input class="input is-rounded" type="text" placeholder="Description" autofocus="" style="width:400px;">
         </div>
    </div>

    <?php form_open('additem/post_item'); ?>

<a class="button is-primary is-rounded">Add this place</a>
<a class="button is-danger is-rounded" href="<?php echo base_url(); ?>additem">Reset</a>
<div style="padding-bottom:200px;"></div> 
</div>
