<?php include 'topbar.php'; include 'dropdown.html'; include 'h4.html';?>
<h1>reviews</h1>
<button class="collapsible">view reviews</button>
<div class="content">
<p>
	<?php include 'reviews.html'; ?>
</p>
</div>
<script>
var collapsible = document.getElementsByClassName("collapsible");
var i;

for (i = 0; i < collapsible.length; i++) {
  collapsible[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var content = this.nextElementSibling;
    if (content.style.maxHeight){
      content.style.maxHeight = null;
    } else {
      content.style.maxHeight = content.scrollHeight + "px";
    } 
  });
}
</script>
<h4><a href = "post.php" class = "button3">leave a review</a></h4>