  // フィボナッチ数列　ネットからコピー　理論がわからない
  // 1 1 2 3 5 8 13 21 34 55
function fibonacci(position, memo = []) {
 if (position < 3) return 1;
 if (memo[position]) return memo[position];
 memo[position] =
   fibonacci(position - 1, memo) + fibonacci(position - 2, memo);
 return memo[position];
}

function fibonacci_calc($index) {
  $left_num = 1;
  $right_num = 1;
  $result_num = [];
  for($i = 0; $i < $index; $i++) {
    if ($i == 0) {
      $result_num.push(1);
    } else if ($i == 1) {
      $result_num.push(1);
    } else {
      $result_num.push($left_num + $right_num);
      $left_num = $right_num;
      $right_num = $result_num[$result_num.length - 1];
    }
  }
  
  console.log($result_num);
}


// 階乗計算
function display() {
  let sum = prompt ("階乗計算 数値を入力して下さい。");
  let n = Kaijou(sum);
  alert (n);
}

function Kaijou(n) {
  let k = 1;
  for(let i = 1; i <= n; i++) {
    k *= i;
  }
  sum = n + "! = " + k;
  return sum;
}

// チェックボックス
const clickFunction = (areaID) => {
  const parent = document.getElementById("area-" + areaID);
  const children = document.getElementsByName("Prefectural-" + areaID);
  for(let i = 0; i < children.length; i++) {
   if(parent.checked === false) {
    children[i].checked = false; 
   } else {
    children[i].checked = true; 
   }
  }
}

// $(function() {
//   $(`all`).on("click", function()) {
//     $(`.list`).prop("checked", $(this).prop("checked"))
//   }  
// });


// ボタン　クリア
const clickClearFunction = () => {
  for(let i = 1; i <= 8; i++) {
    const parent = document.getElementById("area-" + i);
    const children = document.getElementsByName("Prefectural-" + i);
    parent.check = false;
    for(let j = 0; j < children.length; j++) {
      children[j].checked = false; 
    }
  }
}

// ボタン　検索
const clickAllFunction = () => {
  for(let i = 1; i <= 8; i++) {
    const parent = document.getElementById("area-" + i);
    const children = document.getElementsByName("Prefectural-" + i);
    parent.check = true;
    for(let k = 0; k < children.length; k++) {
      children[k].checked = true; 
    }
  }
}

function clickBtn1(){
	const p1 = document.getElementById("p1");

	if(p1.style.display=="block"){
		// noneで非表示
		p1.style.display ="none";
	}else{
		// blockで表示
		p1.style.display ="block";
	}
}