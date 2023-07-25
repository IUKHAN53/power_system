const number_entry = document.querySelector("#calculator .number_entry");
const btn_cal = document.querySelector("#calculator .btn_cal");
const btn_reset = document.querySelector("#calculator .btn_reset");
const btn_minus = document.querySelector("#calculator .btn_minus");
const btn_plus = document.querySelector("#calculator .btn_plus");
const btn_default = document.querySelector("#calculator .btn_default");
const percent_entries = document.querySelectorAll(
  "#calculator .percent_entry:not(.D)"
);
const number_outputs = document.querySelectorAll(
  "#calculator .number_output:not(.D)"
);
const label_entries = document.querySelectorAll(
  "#calculator  .label_entry:not(.D)"
);
const percent_entryD = document.querySelector("#calculator .percent_entry.D");
const number_outputD = document.querySelector("#calculator .number_output.D");

let ceiling = 0.05;

btn_cal.onclick = function () {
  ceiling = getCeilingValue();
  let add = ceiling;
  let entry_value = Number(number_entry.value);

  let value = entry_value;
  let decimalPlaces = getdecimalPlaces(value);
  number_entry.value = value.toFixed(decimalPlaces);

  calculate();
};
btn_reset.onclick = function () {
  number_entry.value = "" ;

  calculate();
};
btn_minus.onclick = function () {
  ceiling = getCeilingValue();
  let subtract = ceiling;
  let entry_value = Number(number_entry.value);
  if (entry_value == 5000) {
    subtract = 2;
  } else if (entry_value == 2000) {
    subtract = 1;
  } else if (entry_value == 1000) {
    subtract = 0.5;
  } else if (entry_value == 500) {
    subtract = 0.2;
  } else if (entry_value == 200) {
    subtract = 0.1;
  } else if (entry_value == 100) {
    subtract = 0.05;
  } else if (entry_value == 20) {
    subtract = 0.02;
  } else if (entry_value == 10) {
    subtract = 0.01;
  } else if (entry_value == 0.5) {
    subtract = 0.005;
  } else if (entry_value == 0.25) {
    subtract = 0.001;
  }
  let value = entry_value - subtract;
  let decimalPlaces = getdecimalPlaces(subtract);
  console.log(value, subtract);
  number_entry.value = value.toFixed(decimalPlaces);

  calculate();
};
btn_plus.onclick = function () {
  ceiling = getCeilingValue();
  let add = ceiling;
  let entry_value = Number(number_entry.value);

  let value = entry_value + add;
  let decimalPlaces = getdecimalPlaces(value);
  number_entry.value = value.toFixed(decimalPlaces);

  calculate();
};
btn_default.onclick = function () {
  let percentVAlues = [1, 1.4, 1.9, 2.9];
  let labelValues = ["止盈參考", "自動止盈", "反差範圍", "反差下限"];
  
  percentVAlues.forEach(function (val, i) {
    percent_entries[i].value = val.toFixed(1) + "%";
    number_outputs[i].innerHTML = "";
    label_entries[i].value = labelValues[i];
  });

  calculate();
};
[...percent_entries, number_entry, ...label_entries].forEach(function (el) {
  el.onkeydown = function (e) {
    if (e.key == "Enter") {
      calculate();
    }
  };
});
label_entries.forEach(function (el) {
  el.oninput = saveNumbers;
});
function calculate() {
  let entry_value = Number(number_entry.value);
  ceiling = getCeilingValue();
  let decimalPlaces = getdecimalPlaces();
  number_outputs.forEach(function (el, i) {
    let percent_value = Number(percent_entries[i].value.replace("%", "")) / 100;
    let result = round(entry_value * (1 - percent_value), ceiling);
    el.innerHTML = result.toFixed(decimalPlaces);

    percent_entries[i].value =
      Number(percent_entries[i].value.replace("%", "")).toFixed(2) + "%";
  });

  let outputD = round(
    (Number(number_outputs[2].innerHTML) +
      Number(number_outputs[3].innerHTML)) /
      2,
    ceiling
  );
  number_outputD.innerHTML = outputD.toFixed(decimalPlaces);

  let percentD = ((entry_value - outputD) / entry_value) * 100;
  percent_entryD.value = percentD.toFixed(2) + "%";

  saveNumbers();
}
function getCeilingValue() {
  let entry_value = Number(number_entry.value);

  return entry_value >= 5000 && entry_value < 9999
    ? 5
    : entry_value >= 2000 && entry_value < 5000
    ? 2
    : entry_value >= 1000 && entry_value < 2000
    ? 1
    : entry_value >= 500 && entry_value < 1000
    ? 0.5
    : entry_value >= 200 && entry_value < 500
    ? 0.2
    : entry_value >= 100 && entry_value < 200
    ? 0.1
    : entry_value >= 20 && entry_value < 100
    ? 0.05
    : entry_value >= 10 && entry_value < 20
    ? 0.02
    : entry_value >= 0.5 && entry_value < 10
    ? 0.01
    : entry_value >= 0.25 && entry_value < 0.5
    ? 0.005
    : 0.001;
}
function round(value, step) {
  step || (step = 1.0);
  var inv = 1.0 / step;
  return Math.ceil(value * inv) / inv;
}
function getdecimalPlaces(num = ceiling) {
  let decimalPlaces = ceiling.toString().includes(".")
    ? ceiling.toString().split(".")[1].length
    : 0;
    if (num < 1000 && Number(number_entry.value) <= 1000 && Number(number_entry.value) > 100) {
    decimalPlaces = 1;
  } else if (num < 100 && Number(number_entry.value) <= 100 && Number(number_entry.value) > 0.5) {
    decimalPlaces = 2;
  } else if (num < 0.5 && Number(number_entry.value) <= 0.5) {
    decimalPlaces = 3;
  } 
  return decimalPlaces;
}
percent_entries.forEach(function (el) {
  el.oninput = function () {
    // calculate();
  };
});
function saveNumbers() {
  let result_data = {
    entry_value: number_entry.value,
    percent_entries: [...percent_entries].map((el) => el.value),
    label_entries: [...label_entries].map((el) => el.value),
  };

  sessionStorage.setItem("result_data", JSON.stringify(result_data));
}
function loadNumbers() {
  let result_data = JSON.parse(sessionStorage.getItem("result_data")) || "";
  if (result_data) {
    number_entry.value = result_data.entry_value;
    percent_entries.forEach(function (el, i) {
      el.value = result_data.percent_entries[i];
      label_entries[i].value = result_data.label_entries[i];
    });
  }
}
loadNumbers();
calculate();
