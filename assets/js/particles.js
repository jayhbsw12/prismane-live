<script>
tsParticles.load("tsparticles", {
  background: {
    color: {
      value: "#000000"
    }
  },
  particles: {
    number: {
      value: 150,
      density: {
        enable: true,
        area: 1000
      }
    },
    color: {
      value: ["#00f9ff", "#00ffe5", "#0080ff", "#3366cc", "#6666ff", "#9999ff"]
    },
    shape: {
      type: "circle"
    },
    opacity: {
      value: 0.8
    },
    size: {
      value: 3,
      random: true
    },
    links: {
      enable: true,
      distance: 120,
      color: "#ffffff",
      opacity: 0.2,
      width: 1
    },
    move: {
      enable: true,
      speed: 1,
      direction: "none",
      random: false,
      straight: false,
      outModes: {
        default: "out"
      }
    }
  },
  interactivity: {
    events: {
      onHover: {
        enable: true,
        mode: "grab"
      }
    },
    modes: {
      grab: {
        distance: 200,
        links: {
          opacity: 0.6,
          color: "#00ffcc"
        }
      }
    }
  }
});
</script>
