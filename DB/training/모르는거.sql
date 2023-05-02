SELECT a.gender, COUNT(a.gender) 
FROM employees a
INNER JOIN (
SELECT emp_no
FROM titles
WHERE to_date <NOW()
AND (emp_no,to_date) IN
(
SELECT emp_no, MAX(to_date)
FROM titles
GROUP BY emp_no
)
)b
ON a.emp_no=b.emp_no
GROUP BY a.gender;  