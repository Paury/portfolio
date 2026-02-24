function startTransition() {
  const video = document.querySelector(".slide-video");
  const wipe = document.querySelector(".wipe");
  const page1 = document.querySelector(".page1");
  const page2 = document.querySelector(".page2");

  // Reset video position
  video.style.transition = "none";
  video.style.transform = "translateX(0)";
  video.offsetHeight;

  // Animate video across screen
  video.style.transition = "transform 1s linear";
  video.style.transform = "translateX(200vw)";
  video.currentTime = 0;
  video.play();

  // Start red wipe after video
  setTimeout(() => {
    wipe.style.width = "100%";
  }, 600);

  // Switch pages
  setTimeout(() => {
    page1.classList.remove("active");
    page2.classList.add("active");
  }, 1400);

  // Reset
  setTimeout(() => {
    wipe.style.width = "0%";
    video.style.transition = "none";
    video.style.transform = "translateX(0)";
  }, 2000);
}