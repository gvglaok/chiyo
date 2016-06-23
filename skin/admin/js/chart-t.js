$(function() {
    var cline = document.getElementById("line").getContext("2d");
    window.myLine = new Chart(cline, {
        type: "line",
        data: line,
        options: kconf
    });

    var cbar = document.getElementById("bar").getContext("2d");
    window.myBar = new Chart(cbar, {
        type: "bar",
        data: bar,
        options: kconf
    });

    var cpie = document.getElementById("pie").getContext("2d");
    window.myPie = new Chart(cpie, {
        type: "pie",
        data: pie,
        options: oneCon
    });

    var cradar = document.getElementById("radar").getContext("2d");
    window.myRadar = new Chart(cradar, {
        type: "radar",
        data: radar,
        options: oneCon
    });


});


var kconf = {
    responsive: true,
    tooltips: {
        mode: 'label'
    },
    hover: {
        mode: 'single'
    },
    title: {
        display: true,
        text: "All chart"
    },
    scales: {
        xAxes: [{
            display: true
        }],
        yAxes: [{
            display: true,
            ticks: {
                suggestedMin: 0,
                suggestedMax: 100,
            }
        }]
    }
};

var line = {
    labels: ["one", "two2", "two3", "two4", "two5", "two6"],
    datasets: [{
        label: "数据1",
        fill: false,
        borderColor: "rgba(0,90,200,0.5)",
        pointColor: "rgba(0,90,200,0.8)",
        backgroundColor: "rgba(0,90,200,0.5)",
        data: [70, 20, 30, 40, 70, 92],
    }, {
        label: "数据2",
        fill: false,
        borderColor: "rgba(204,0,102,0.5)",
        pointColor: "rgba(204,0,102,0.8)",
        backgroundColor: "rgba(204,0,102,0.5)",
        data: [30, 50, 30, 70, 40, 66],
    }]
}

var bar = {
    labels: ['number1', 'number2', 'number3', 'number4', 'number5', 'number6'],
    datasets: [{
        label: "数据1",
        fill: false,
        borderColor: "rgba(0,90,200,0.5)",
        pointColor: "rgba(0,90,200,0.8)",
        backgroundColor: "rgba(0,90,200,0.5)",
        data: [30, 50, 30, 70, 40, 66]
    }, {
        label: "数据2",
        fill: false,
        borderColor: "rgba(204,0,102,0.5)",
        pointColor: "rgba(204,0,102,0.8)",
        backgroundColor: "rgba(204,0,102,0.5)",
        data: [55, 66, 45, 23, 45, 67]
    }]
};


var oneCon={
	responsive: true,
    tooltips: {
        mode: 'label'
    },
    hover: {
        mode: 'single'
    },
    title: {
        display: true,
        text: "One datasets chart"
    }
};

var pie = {
    labels: ['number1', 'number2', 'number3', 'number4', 'number5', 'number6'],
    datasets: [{
        backgroundColor: ["rgba(0,90,200,0.5)","rgba(35,90,200,0.5)",
        				"rgba(60,90,200,0.5)","rgba(90,90,200,0.5)","rgba(120,90,200,0.5)"],

        hoverBackgroundColor: ["rgba(0,90,200,0.8)","rgba(35,90,200,0.8)",
        				"rgba(60,90,200,0.8)","rgba(90,90,200,0.8)","rgba(120,90,200,0.8)"],

        data: [30, 50, 30, 70, 40, 66]
    }]
};
var radar = {
    labels: ['number1', 'number2', 'number3', 'number4', 'number5', 'number6'],
    datasets: [{
        label: "数据1",
        borderColor: "rgba(0,90,200,0.5)",
        pointColor: "rgba(0,90,200,0.8)",
        backgroundColor: "rgba(0,90,200,0.5)",
        data: [30, 50, 30, 70, 40, 66]
    }, {
        label: "数据2",
        borderColor: "rgba(204,0,102,0.5)",
        pointColor: "rgba(204,0,102,0.8)",
        backgroundColor: "rgba(204,0,102,0.5)",
        data: [55, 66, 45, 23, 45, 67]
    }]
};
