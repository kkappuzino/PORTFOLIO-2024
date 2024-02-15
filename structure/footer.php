</body>
<script>


  let menuItems = document.querySelectorAll(".menu-hover-image .menu-item");
  let cursor = document.querySelector(".menu-hover-image .cursor");

  function getXY(e) {
    return [e.clientX, e.clientY];
  }

  menuItems.forEach((menuItem) => {
    menuItem.addEventListener("mouseenter", (e) => {
      let [x, y] = getXY(e);
      cursor.animate(
        [
          {
            opacity: 0,
            transform: `translate(${x}px, ${y}px) scale(0)`
          },
          {
            opacity: 1,
            transform: `translate(${x}px, ${y}px) scale(1)`
          }
        ],
        { duration: 300, fill: "forwards" }
      );
      menuItem.addEventListener("mouseleave", (e) => {
        let [x, y] = getXY(e);
        cursor.animate(
          [
            {
              opacity: 1,
              transform: `translate(${x}px, ${y}px) scale(1)`
            },
            {
              opacity: 0,
              transform: `translate(${x}px, ${y}px) scale(0)`
            }
          ],
          { duration: 300, fill: "forwards" }
        );
      });
    });

    menuItem.addEventListener("mousemove", (e) => {
      let [x, y] = getXY(e);
      cursor.animate(
        [
          {
            transform: `translate(${x}px, ${y}px)`
          },
          {
            transform: `translate(${x}px, ${y}px)`
          }
        ],
        { duration: 500, delay: 50, fill: "forwards" }
      );
    });
  });



  

    function toggleTheme() {
        if (document.body.classList.contains("light"))
            document.body.classList.remove("light");
        else
            document.body.classList.add("light");
    }

    function toggleTheme() {
        if (document.body.classList.contains("basic"))
            document.body.classList.remove("basic");
        else
            document.body.classList.add("basic");
    }


    //Menu toggle-effect
    $(document).ready(function(){
    $(".menu-icon").on("click",function(){
        $("nav ul").toggleClass("showing");
    });
    });

    //Scrolling Effect
    $(window).on('scroll', function(){
    if($(window).scrollTop()) {
        $('nav').addClass('black');
    }
    else{
        $('nav').removeClass('black')
    }
    })



    gsap.registerPlugin(ScrollTrigger);

const pageContainer = document.querySelector(".scroll");

/* SMOOTH SCROLL */
const scroller = new LocomotiveScroll({
  el: pageContainer,
  smooth: true
});

scroller.on("scroll", ScrollTrigger.update);

ScrollTrigger.scrollerProxy(pageContainer, {
  scrollTop(value) {
    return arguments.length
      ? scroller.scrollTo(value, 0, 0)
      : scroller.scroll.instance.scroll.y;
  },
  getBoundingClientRect() {
    return {
      left: 0,
      top: 0,
      width: window.innerWidth,
      height: window.innerHeight
    };
  },
  pinType: pageContainer.style.transform ? "transform" : "fixed"
});

////////////////////////////////////
////////////////////////////////////
window.addEventListener("load", function () {
  let pinBoxes = document.querySelectorAll(".pin-wrap > *");
  let pinWrap = document.querySelector(".pin-wrap");
  let pinWrapWidth = pinWrap.offsetWidth;
  let horizontalScrollLength = pinWrapWidth - window.innerWidth;

  // Pinning and horizontal scrolling

  gsap.to(".pin-wrap", {
    scrollTrigger: {
      scroller: pageContainer, //locomotive-scroll
      scrub: true,
      trigger: "#sectionPin",
      pin: true,
      // anticipatePin: 1,
      start: "top top",
      end: pinWrapWidth
    },
    x: -horizontalScrollLength,
    ease: "none"
  });

  ScrollTrigger.addEventListener("refresh", () => scroller.update()); //locomotive-scroll

  ScrollTrigger.refresh();
});


</script>
</html>