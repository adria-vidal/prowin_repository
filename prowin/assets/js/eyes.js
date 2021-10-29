const wrapper2 = document.getElementById("wrapper");
const eye1 = document.getElementById("eye1");
const eye2 = document.getElementById("eye2");

const updateEyeMouseTracking = (e, eye) => {
	const targetX = e.clientX;
	const targetY = e.clientY;
	const eyeLeft = eye.offsetLeft;
	const eyeTop = eye.offsetTop;
	const eyeWidth = eye.offsetWidth;
	const eyeHeight = eye.offsetHeight;
	const eyeX = eyeLeft + eyeWidth / 2;
	const eyeY = eyeTop + eyeHeight / 2;
	const currentRadians = parseFloat(
		getComputedStyle(eye).getPropertyValue("--radians")
	);
	const twoPI = Math.PI * 2;
	const xDiff = targetX - eyeX;
	const yDiff = targetY - eyeY;
	const mouseRadians = Math.atan2(yDiff, xDiff);

	// const mouseEyeDistance = Math.sqrt(xDiff*xDiff + yDiff*yDiff);
	// console.log(mouseEyeDistance);

	// update eye rotation
	// calc angle between current position and next
	let radiansDiff = mouseRadians - (currentRadians % twoPI);

	// if the angle changed
	if (radiansDiff !== 0) {
		// if the angle delta > PI there is a shorter route
		if (Math.abs(radiansDiff) > Math.PI) {
			radiansDiff =
				(twoPI - Math.abs(radiansDiff)) * -1 * Math.sign(radiansDiff);
		}

		const newRadians = currentRadians + radiansDiff;

		eye.style.setProperty("--radians", newRadians + "rad");
	}

	// update pupil offset (when hovering over the eye)
};

const updateEyesMouseTracking = (e) => {
	updateEyeMouseTracking(e, eye1);
	updateEyeMouseTracking(e, eye2);
};

wrapper2.addEventListener("mousemove", updateEyesMouseTracking);
