DROP TABLE IF EXISTS salaries;
DROP TABLE IF EXISTS titles;
DROP TABLE IF EXISTS dept_manager;
DROP TABLE IF EXISTS dept_emp;
DROP TABLE IF EXISTS departments;
DROP TABLE IF EXISTS employees;

CREATE TABLE employees (
    emp_no      INT             NOT NULL  AUTO_INCREMENT,
    birth_date  DATE            NOT NULL,
    first_name  VARCHAR(14)     NOT NULL,
    last_name   VARCHAR(16)     NOT NULL,
    gender      ENUM ('M','F')  NOT NULL,
    hire_date   DATE            NOT NULL,
    PRIMARY KEY (emp_no)
);

CREATE TABLE departments (
    dept_no     INT             NOT NULL AUTO_INCREMENT,
    dept_name   VARCHAR(40)     NOT NULL,
    PRIMARY KEY (dept_no)
);

CREATE TABLE dept_emp (
    emp_no      INT         NOT NULL,
    dept_no     INT         NOT NULL,
    from_date   DATE        NOT NULL,
    to_date     DATE        NOT NULL,
    KEY         (emp_no),
    KEY         (dept_no),
    FOREIGN KEY (emp_no) REFERENCES employees (emp_no) ON DELETE CASCADE,
    FOREIGN KEY (dept_no) REFERENCES departments (dept_no) ON DELETE CASCADE,
    PRIMARY KEY (emp_no, dept_no)
);

CREATE TABLE dept_manager (
   dept_no      INT      NOT NULL,
   emp_no       INT      NOT NULL,
   from_date    DATE     NOT NULL,
   to_date      DATE     NOT NULL,
   KEY         (emp_no),
   KEY         (dept_no),
   FOREIGN KEY (emp_no)  REFERENCES employees (emp_no)    ON DELETE CASCADE,
   FOREIGN KEY (dept_no) REFERENCES departments (dept_no) ON DELETE CASCADE,
   PRIMARY KEY (emp_no, dept_no)
);

CREATE TABLE titles (
    emp_no      INT          NOT NULL,
    title       VARCHAR(50)  NOT NULL,
    from_date   DATE         NOT NULL,
    to_date     DATE,
    KEY         (emp_no),
    FOREIGN KEY (emp_no) REFERENCES employees (emp_no) ON DELETE CASCADE,
    PRIMARY KEY (emp_no, title, from_date)
);

CREATE TABLE salaries (
    emp_no      INT    NOT NULL,
    salary      INT    NOT NULL,
    from_date   DATE   NOT NULL,
    to_date     DATE   NOT NULL,
    KEY         (emp_no),
    FOREIGN KEY (emp_no) REFERENCES employees (emp_no) ON DELETE CASCADE,
    PRIMARY KEY (emp_no, from_date)
);
