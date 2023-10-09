(defvar *arch-enemy* nil)
(defun pudding-eater (person)
  (cond ((eq person 'henry) (setf *arch-enemy* 'stupid-lisp-alien)
    '(curse you lisp alien - you ate my pudding))
    ((eq person 'johnny) (setf *arch-enemy* 'useless-old-johnny)
    '(i hope you choked on my pudding johnny))
    (t '(why you eat my pudding stranger ?))))

(defun compare-numbers (a b)
  (cond
    ((< a b) (format t "~aは~aより小さい" a b))
    ((> a b) (format t "~aは~aより大きい" a b))
    (t (format t "~aと~aは等しい" a b))))
(defun get-day-message (day)
  (case day
    ((mon) (format t "monday"))
    ((tue) (format t "tuesday"))
    ((wed) (format t "wednes"))
    ((thur) (format t "thurs"))
    ((fri) (format t "fri"))
    ((sat) (format t "sat"))
    (otherwise (format t "mukou"))))

(defun season-msg (month)
  (case month
    ((12 1 2) (format t "冬。暖かい服をきよ"))
    ((3 4 5) (format t "春。花が咲き始める"))
    ((6 7 8) (format t "夏。日差し強い"))
    ((9 10 11) (format t "あき。紅葉うつくしい"))
    (otherwise (format t "無効"))))
(defun cond-season (m)
  (cond
    ((or (= m 12) (= m 1) (= m 2))
    (format t "暖かい服"))
    ((or (= m 3) (= m 4) (= m 5))
    (format t "花がさく"))
    (t (format t "mokou"))))

(defun check-num (n)
  (cond
    ((< n 0) (format t "~aは負の数" n))
    ((= n 0) (format t "~aはゼロ" n))
    ((> n 0) (format t "~aは正の数" n))))

(defun check-case (n)
  (case n
    ((< n 0) (format t "minus"))
    ((= n 0) (format t "zero"))
    ((> n 0) (format t "plus"))))
(defvar *a* nil)
(defun test-case (n)
  (case n
    ((1)  (setf *a* 'one)
      '(you choose one))
    ((2)  (setf *a* 'two))
    (otherwise '(otherwiseeee!))))
