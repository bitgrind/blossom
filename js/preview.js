
//php vars
var test ="testString";
var previewId = <?php echo $previewId; ?>;
var userId = <?php echo $userId; ?>;
var contactId = <?php echo $contactId; ?>;
var cssLink = <?php echo $cssLink; ?>;
var businessName = <?php echo $businessName; ?>;
var diffStatement = <?php echo $diffStatement; ?>;
var description = <?php echo $description; ?>;
var description2 = <?php echo $description2; ?>;
var businessPitch = <?php echo $businessPitch; ?>;
var service1 = <?php echo $service1; ?>;
var facebook = <?php echo $facebook; ?>;
var instagram = <?php echo $instagram; ?>;
var linkedin = <?php echo $linkedin; ?>;
var twitter = <?php echo $twitter; ?>;


$(function(){
  $(".intro-message h1").append(test);
});//jQuery
