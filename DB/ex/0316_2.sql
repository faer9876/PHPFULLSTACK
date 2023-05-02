-- inner JOIN 의 구조
 SELECT emp.emp_no, eemp.dept_no, emp.first_name
FROM employees emp 
INNER JOIN dept_emp eemp
ON emp.emp_no=eemp.emp_no
LIMIT 10;

-- outer join 의 구조
SELECT dept.dept_no,dept.dept_name,d_m.emp_no
FROM departments dept
full OUTER JOIN dept_manager d_m
ON dept.dept_no = d_m.dept_no;


INSERT INTO departments
VALUES(
'd010'
,'test'
);
COMMIT;

SELECT *
FROM departments;

-- 테이블1의 모든 레코드와 테이블2의 모든 레코드를 조인
SELECT dept.dept_no,dept.dept_name,d_m.emp_no
FROM departments dept
cross JOIN dept_manager d_m


-- self join
SELECT *
FROM departments d1
INNER JOIN departments d2
ON d2.dept_no=d1.dept_no;

SELECT emp2.*
FROM employees emp1
INNER JOIN employees emp2
ON emp1.sup_no=emp2.emp_no

ALTER TABLE titles ADD sup_no INT;

ALTER TABLE employees ADD COLUMN sup_no INT(11);

-- union
SELECT *
FROM employees 
WHERE emp_no =10001 or emp_no=10005
UNION all
SELECT *
FROM employees 
WHERE emp_no = 10005;


-- 사원의 사원번호,풀네임, 직책명 출력
-- 사원의 사원번호, 성별, 현재 월급을 출력
-- 10010 사원의 풀네임, 과거부터 현재까지 월급 이력 출력
-- 사원의 사원번호, 풀네임, 소속부서명
-- 현재 월급의 상위 10위까지 사원의 사번, 풀네임, 월급
-- 사원의 사원번호, 사원 풀네임, 소속부서명 을 출력


-- 1
SELECT emp1.emp_no, CONCAT(emp1.first_name,emp1.last_name), emp2.title
FROM employees emp1
INNER JOIN titles emp2
ON emp1.emp_no=emp2.emp_no
WHERE emp2.to_date>=NOW()
;

-- 2
SELECT emp1.emp_no, emp1.gender, max(emp2.salary)
FROM employees emp1
INNER JOIN salaries emp2
ON emp1.emp_no=emp2.emp_no
GROUP BY emp_no
;

-- 3
SELECT emp1.emp_no, emp1.first_name, emp1.last_name, emp2.salary
FROM employees emp1
INNER JOIN salaries emp2
ON emp1.emp_no=emp2.emp_no
WHERE emp1.emp_no=10010 


-- 4
SELECT emp1.emp_no, CONCAT(first_name,last_name), dept3.dept_name
FROM employees emp1
INNER JOIN dept_emp emp2
ON emp1.emp_no= emp2.emp_no
INNER JOIN departments dept3
ON emp2.dept_no=dept3.dept_no
WHERE emp2.to_date>=NOW()
ORDER BY emp1.emp_no
;

-- 5
SELECT emp1.emp_no,  CONCAT(first_name,last_name), emp2.salary, RANK() over(order by salary desc)
FROM employees emp1
INNER JOIN salaries emp2
ON emp1.emp_no=emp2.emp_no
WHERE emp2.to_date>=NOW()
LIMIT 10;
;


-- 6
SELECT dept3.dept_name,CONCAT(first_name,last_name),emp2.hire_date, dept3.dept_no
FROM dept_manager emp1
INNER JOIN employees emp2
ON emp1.emp_no=emp2.emp_no
left outer JOIN departments dept3
ON emp1.dept_no=dept3.dept_no
WHERE emp1.to_date>=NOW()
;


-- 6-1
SELECT dep.dept_name ,CONCAT(em.first_name, em.last_name), em.hire_date
from departments dep
left outer JOIN dept_manager dm
ON dep.dept_no=dm.dept_no
LEFT OUTER JOIN employees em
ON dm.emp_no=em.emp_no
GROUP BY dep.dept_name
;

-- ON emp1.emp_no=mp2.emp_no
left outer JOIN departments dept3
ON emp1.dept_no=dept3.dept_no
WHERE emp1.to_date>=NOW()
;


-- 7
SELECT emp1.title, AVG(emp2.salary)
FROM titles emp1
INNER JOIN salaries emp2
ON emp1.emp_no=emp2.emp_no
WHERE title="Staff" AND emp1.to_date>=NOW() AND emp2.to_date>=NOW()
GROUP BY emp1.emp_no
;

-- 8
SELECT  CONCAT(first_name,last_name), emp1.emp_no, emp2.dept_no
FROM employees emp1
INNER JOIN dept_manager emp2
WHERE emp1.to_date>=NOW()
ON emp1.emp_no=emp2.emp_no
;

-- 9
SELECT emp1.title,floor(AVG(emp2.salary)) AS avg_s
FROM titles emp1
INNER JOIN salaries emp2
ON emp1.emp_no=emp2.emp_no
WHERE emp1.to_date>=NOW() AND emp2.to_date>=now()
GROUP BY emp1.title HAVING  avg_s>=60000
ORDER BY  avg_s desc
;

-- 10
SELECT emp2.title,COUNT(emp1.emp_no)
FROM employees emp1
INNER JOIN titles emp2
ON emp1.emp_no=emp2.emp_no
WHERE emp1.gender="F" AND emp2.to_date>=NOW()
GROUP BY title 
;

-- 11
SELECT title, gender, COUNT()
FROM employees emp1
INNER JOIN titles emp2
ON emp1.emp_no=emp2.emp_no
INNER JOIN salaries emp3
ON emp2.emp_no=emp3.emp_no
WHERE gender="M" AND emp3.from_date>=NOW() AND emp3.to_date<=NOW()
GROUP BY title
;

-- 11-1
SELECT emp2.title, emp1.gender
FROM employees emp1
inner JOIN titles emp2
ON emp1.emp_no=emp2.emp_no
WHERE emp2.to_date<=now() AND emp2.from_date>=NOW() AND gender="M"
GROUP BY title
;

SELECT
	sal.emp_no
	,sal.from_date
	,(	SELECT CONCAT(emp.last_name, ' ', emp.first_name)
		FROM employees emp
		WHERE emp.emp_no = sal.emp_no
	) f_name
FROM salaries sal
WHERE sal.to_date >= NOW();


SELECT e.*
FROM (
		SELECT emp_no, gender
		FROM employees
		WHERE gender = 'F'
	 ) e;
	 
	 
-- 다중열 서브쿼리의 경우
SELECT *
FROM dept_emp
WHERE (emp_no, dept_no) IN  (
								SELECT emp_no, dept_no
								FROM dept_manager
								WHERE to_date >= NOW()
							);
							
SELECT *
FROM dept_manager
WHERE dept_no = ALL (
						SELECT dept_no 
						FROM dept_manager
						WHERE dept_no = 'd002'
					);
					
					
SELECT A.gender, COUNT(A.gender)
from employees A
INNER JOIN
(
SELECT A.emp_no
FROM (
SELECT emp_no
FROM titles
GROUP BY emp_no
HAVING COUNT(emp_no)>1
)A
WHERE A.emp_no NOT IN (
SELECT A.emp_no FROM titles A
INNER JOIN (
SELECT emp_no
FROM titles
GROUP BY emp_no
HAVING COUNT(emp_no)>1
)B
ON A.emp_no=B.emp_no
WHERE to_date=DATE('9999-01-01')
)
UNION

SELECT A.emp_no
FROM titles A
INNER JOIN (
select emp_no
FROM titles A
INNER JOIN (
SELECT emp_no
FROM titles
GROUP BY emp_no
HAVING COUNT(emp_no) =1
)B
ON A.emp_no=B.emp_no
WHERE A.to_date !=DATE('9999-01-01')
;




SELECT em.gender , COUNT(em.gender)
FROM employees em
	INNER JOIN(
		SELECT emp_no
		FROM titles
		WHERE to_date<=NOW()   -- 현재 날짜보다 예전 날짜 중에서도 가장 큰 
		AND (emp_no,to_date) IN ( -- 날짜만 선택 그리고 emp_no로 묶어서
			SELECT emp_no, MAX(to_date) -- 
			FROM titles
			GROUP BY emp_no
)
)Maxd
ON em.emp_no=Maxd.emp_no
GROUP BY em.gender
;
