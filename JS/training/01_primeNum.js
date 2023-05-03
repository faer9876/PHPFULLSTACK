let num=100;
let arr=[];
let arr2=[];
// 1. 1~입력값의 요소를 가지는 배열을 만들기
// 2. 그 배열에서 소수만 찾아서 새로운 배열 만들기
// 3. 그 배열을 알러트(alert)로 출력

for(let i=1;i<=num;i++){
    arr.push(i);
}

const isPrime = num => {
    if (num < 2) {
        return false;
    }
    for (let i = 2; i <= Math.sqrt(num); i++) { 
        if (num % i === 0){
            return false;
        } 
    }
    return true; 
    };

    const primes = arr.filter(isPrime);

// console.log(primes);
alert(primes);