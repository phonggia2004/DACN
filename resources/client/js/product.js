const minRange = document.getElementById("minRange");
const maxRange = document.getElementById("maxRange");
const minValue = document.getElementById("min-value");
const maxValue = document.getElementById("max-value");

function updateValues() {
  let minVal = parseInt(minRange.value);
  let maxVal = parseInt(maxRange.value);

  if (minVal > maxVal - 50) {
    minRange.value = maxVal - 50;
    minVal = parseInt(minRange.value);
  }
  if (maxVal < minVal + 50) {
    maxRange.value = minVal + 50;
    maxVal = parseInt(maxRange.value);
  }

  minValue.textContent = minVal.toLocaleString() + " VNĐ";
  maxValue.textContent = maxVal.toLocaleString() + " VNĐ";
}

minRange.addEventListener("input", updateValues);
maxRange.addEventListener("input", updateValues);

updateValues(); // load initial values
