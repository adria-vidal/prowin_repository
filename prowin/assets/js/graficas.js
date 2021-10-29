const data = {
	labels: [
		'red',
		'blue',
		'yellow'

	],
	datasets:[{
		label: 'My First Dataset',
		data: [300, 50, 100],
		backgroundColor: [
			'rgb(255,99,123)',
			'rgb(54,162,235)',
			'rgb(255,205,86)'
		],
		hoverOffset:4
	}]
};
//block setup
const config = {
	type: 'pie',
	data: data,
};
module.exports = {
actions: [],
config: config,
};
