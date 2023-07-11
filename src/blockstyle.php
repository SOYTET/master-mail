<style>
    .sparkle-button {
  --active: 0;
  --bg: radial-gradient(
			40% 50% at center 100%,
			hsl(270 calc(var(--active) * 97%) 72% / var(--active)),
			transparent
		),
		radial-gradient(
			80% 100% at center 120%,
			hsl(260 calc(var(--active) * 97%) 70% / var(--active)),
			transparent
		),
		hsl(260 calc(var(--active) * 97%) calc((var(--active) * 44%) + 12%));
  background: var(--bg);
  font-size: 1.2rem;
  font-weight: 500;
  border: 0;
  cursor: pointer;
  padding: 1em 1em;
  display: flex;
  align-items: center;
  gap: 0.25em;
  white-space: nowrap;
  border-radius: 100px;
  position: relative;
  box-shadow: 0 0 calc(var(--active) * 3em) calc(var(--active) * 1em) hsl(260 97% 61% / 0.75),
		0 0em 0 0 hsl(260 calc(var(--active) * 97%) calc((var(--active) * 50%) + 30%)) inset,
		0 -0.05em 0 0 hsl(260 calc(var(--active) * 97%) calc(var(--active) * 60%)) inset;
  transition: box-shadow var(--transition), scale var(--transition), background var(--transition);
  scale: calc(1 + (var(--active) * 0.1));
  transition: .3s;
}

.sparkle-button:active {
  scale: 1;
  transition: .3s;
}

.sparkle path {
  color: hsl(0 0% calc((var(--active, 0) * 70%) + var(--base)));
  transform-box: fill-box;
  transform-origin: center;
  fill: currentColor;
  stroke: currentColor;
  animation-delay: calc((var(--transition) * 1.5) + (var(--delay) * 1s));
  animation-duration: 0.6s;
  transition: color var(--transition);
}

.sparkle-button:is(:hover, :focus-visible) path {
  animation-name: bounce;
}

@keyframes bounce {
  35%, 65% {
    scale: var(--scale);
  }
}

.sparkle path:nth-of-type(1) {
  --scale: 0.5;
  --delay: 0.1;
  --base: 40%;
}

.sparkle path:nth-of-type(2) {
  --scale: 1.5;
  --delay: 0.2;
  --base: 20%;
}

.sparkle path:nth-of-type(3) {
  --scale: 2.5;
  --delay: 0.35;
  --base: 30%;
}

.sparkle-button:before {
  content: "";
  position: absolute;
  inset: -0.2em;
  z-index: -1;
  border: 0.25em solid hsl(260 97% 50% / 0.5);
  border-radius: 100px;
  opacity: var(--active, 0);
  transition: opacity var(--transition);
}

.spark {
  position: absolute;
  inset: 0;
  border-radius: 100px;
  rotate: 0deg;
  overflow: hidden;
  mask: linear-gradient(white, transparent 50%);
  animation: flip calc(var(--spark) * 2) infinite steps(2, end);
}

@keyframes flip {
  to {
    rotate: 360deg;
  }
}

.spark:before {
  content: "";
  position: absolute;
  width: 200%;
  aspect-ratio: 1;
  top: 0%;
  left: 50%;
  z-index: -1;
  translate: -50% -15%;
  rotate: 0;
  transform: rotate(-90deg);
  opacity: calc((var(--active)) + 0.4);
  background: conic-gradient(
		from 0deg,
		transparent 0 340deg,
		white 360deg
	);
  transition: opacity var(--transition);
  animation: rotate var(--spark) linear infinite both;
}

.spark:after {
  content: "";
  position: absolute;
  inset: var(--cut);
  border-radius: 100px;
}

.backdrop {
  position: absolute;
  inset: var(--cut);
  background: var(--bg);
  border-radius: 100px;
  transition: background var(--transition);
}

@keyframes rotate {
  to {
    transform: rotate(90deg);
  }
}

@supports(selector(:has(:is(+ *)))) {
  body:has(button:is(:hover, :focus-visible)) {
    --active: 1;
    --play-state: running;
  }

  .bodydrop {
    display: none;
  }
}

.sparkle-button:is(:hover, :focus-visible) ~ :is(.bodydrop, .particle-pen) {
  --active: 1;
  --play-state: runnin;
}

.sparkle-button:is(:hover, :focus-visible) {
  --active: 1;
  --play-state: running;
}

.sp {
  position: relative;
}

.particle-pen {
  position: absolute;
  width: 200%;
  aspect-ratio: 1;
  top: 50%;
  left: 50%;
  translate: -50% -50%;
  -webkit-mask: radial-gradient(white, transparent 65%);
  z-index: -1;
  opacity: var(--active, 0);
  transition: opacity var(--transition);
}

.particle {
  fill: white;
  width: calc(var(--size, 0.25) * 1rem);
  aspect-ratio: 1;
  position: absolute;
  top: calc(var(--y) * 1%);
  left: calc(var(--x) * 1%);
  opacity: var(--alpha, 1);
  animation: float-out calc(var(--duration, 1) * 1s) calc(var(--delay) * -1s) infinite linear;
  transform-origin: var(--origin-x, 1000%) var(--origin-y, 1000%);
  z-index: -1;
  animation-play-state: var(--play-state, paused);
}

.particle path {
  fill: hsl(0 0% 90%);
  stroke: none;
}

.particle:nth-of-type(even) {
  animation-direction: reverse;
}

@keyframes float-out {
  to {
    rotate: 360deg;
  }
}

.text {
  translate: 2% -6%;
  letter-spacing: 0.01ch;
  background: linear-gradient(90deg, hsl(0 0% calc((var(--active) * 100%) + 65%)), hsl(0 0% calc((var(--active) * 100%) + 26%)));
  -webkit-background-clip: text;
  color: transparent;
  transition: background var(--transition);
}

.sparkle-button svg {
  inline-size: 1.25em;
  translate: -25% -5%;
}


/* manu  */
.hamburger {
  cursor: pointer;
  margin-top: 8px;
}

.hamburger input {
  display: none;
}

.hamburger svg {
  /* The size of the SVG defines the overall size */
  height: 2em;
  /* Define the transition for transforming the SVG */
  transition: transform 600ms cubic-bezier(0.4, 0, 0.2, 1);
}

.line {
  fill: none;
  stroke: white;
  stroke-linecap: round;
  stroke-linejoin: round;
  stroke-width: 3;
  /* Define the transition for transforming the Stroke */
  transition: stroke-dasharray 600ms cubic-bezier(0.4, 0, 0.2, 1),
              stroke-dashoffset 600ms cubic-bezier(0.4, 0, 0.2, 1);
}

.line-top-bottom {
  stroke-dasharray: 12 63;
}

.hamburger input:checked + svg {
  transform: rotate(-45deg);
}

.hamburger input:checked + svg .line-top-bottom {
  stroke-dasharray: 20 300;
  stroke-dashoffset: -32.42;
}

</style>