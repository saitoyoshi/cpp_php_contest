(let ((a 2) (b 3))
  (let ((c (+ 2 (* a b))))
    (+ c -1)))

(let ((a 7))
  (let ((a 2))
    (+ a 2)))

(let ((a 1))
  (progn
    (princ a)
    (let ((a 2))
      (progn
        (princ a)
        (let ((a 3))
          (princ a))))))
