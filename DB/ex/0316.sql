-- 자신의 사원정보중 생일, 이름, 성을 바꾸기
UPDATE departemnts
SET dept_name = '2000'
WHERE dept_no = 'd001';

-- 자신의 사원정보 지우기
DELETE FROM employees
WHERE emp_no = 500000;

-- 1. 사원 정보테이블에 각자의 정보를 적절하게 넣어주세요.
-- 2. 월급, 직책, 소속부서 테이블에 각자의 정보를 적절하게 넣어주세요.
-- 3. 짝궁의 [1,2]것도 넣어주세요.
-- 4. 나와 짝궁의 소속 부서를 d009로 변경해 주세요.
-- 5. 짝궁의 모든 정보를 삭제해 주세요.
-- 6.'d009'부서의 관리자를 나로 변경해 주세요.
-- 7. 오늘 날짜부로 나의 직책을 'Senior Engineer'로 변경해 주세요.
-- 8. 최고 연봉 사원과 최저 연봉 사원의 사번과 이름을 출력해 주세요.
--	** 최고/최저 급여 중복자가 있을 경우 제대로된 데이터를 출력할 수 없다. **
	SELECT emp_no, first_name
	FROM employees
	WHERE emp_no = 
		( SELECT emp_no FROM salaries ORDER BY salary LIMIT 1)
	OR 
	emp_no = 
		( SELECT emp_no FROM salaries ORDER BY salary DESC LIMIT 1);

-- 9. 전체 사원의 평균 연봉을 출력해 주세요.
-- 10. 사번이 499.975인 사원의 지금까지 평균 연봉을 출력

-- 최고와 최저를 활용하려면 오름, 내림차순으로 정렬


-- 정보 가져오기
SELECT CONCAT(last_name,', ',first_name)
FROM employees
WHERE emp_no = 500000;

-- 정보중 띄워쓰기 있으면 제일 처음에 넣은 문자 넣기
SELECT CONCAT_WS(',',last_name,first_name)
FROM employees
WHERE emp_no = 500000;


-- 정수 자동 컴마 정렬 및 소숫점 넣기
SELECT FORMAT(123456,2);

-- 왼쪽 길이 만큼 문자열 잘라서 출력
SELECT LEFT('abcdfg',3);

-- 오른쪽 ..
SELECT RIGHT('abcdfg',2);

-- 소문자를 대문자로
SELECT UPPER('abc');

-- 대문자를 소문자로
SELECT LOWER('ABC');

-- 문자열을 포함해 부족한 길이만큼 뒷 문자 추가(왼쪽)
SELECT LPAD('abc',5,'@');

-- 문자열을 포함해 부족한 길이만큼 뒷 문자 추가(왼쪽)
SELECT RPAD('abc',5,'@');

-- 좌,우 공백 제거 trim rtrim ltrim
SELECT TRIM(' abc ');

-- 방향 지정해 문자열 2에서 문자열 1을 제거 leading(좌) both trailing(우) 
select TRIM(trailing 'abc' FROM 'abcdefabc');

-- 문자열을 시작위치에서 자름
SELECT SUBSTRING('abcdfg',2,4);

-- 왼쪽부터 구분자가 횟수 뒤에 것을 자름
SELECT SUBSTRING_index('ab.cd.ef,gh','.',4);

-- 수학함수
-- 올림
SELECT CEILING(3,24);

-- 내림
SELECT FLOOR(3.23);

-- 반올림
SELECT ROUND(2.24);

--소수점 기준으로 정수 위치 까지 구하고 나머지는 버린다
SELECT TRUNCATE(1.11,2);


-- 날짜 및 시간 함수 date는 날짜만 datetime은 시간까지 표시

-- 현재 날짜/ 시간
SELECT NOW();

-- 년,날짜 및 시간
SELECT DATE(NOW());

-- 날짜 1에서 날짜 2를 더한 날 날짜 표시에 ''필수
SELECT ADDDATE('2023-05-13',INTERVAL 31 DAY);
SELECT ADDDATE(NOW(),INTERVAL -1 DAY);

-- 날짜 1에서 날짜 2를 뺀 날자를 구함
SELECT SUBDATE(NOW(), INTERVAL 1 DAY);

-- 날짜/시간 에서 시간을 더한 날짜/시간 ('시:분:초')
SELECT ADDTIME(NOW(), '1:1:1');

-- 날짜/시간 에서 시간을 뺀 날짜/시간
SELECT SUBTIME(NOW(), '1:1:1');

-- 순위 함수
SELECT emp_no, RANK() over(ORDER BY salary ASC) r, salary
FROM salaries 

--레코드
SELECT emp_no, row_number() over(ORDER BY salay ASC) r, salary
