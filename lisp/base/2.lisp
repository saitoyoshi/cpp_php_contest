(defun join-2 (xs ys)
  (if (null xs)
    ys
    (cons (first xs)
          (join-2 (rest xs) ys))))
; (defun fa (x &key add)
;   (+ x add))
; (defun fb (&key a b c d e f)
;   (list a b c d e f))
; (defun fc (&optional &key a b c d)
;   (list a b c d))
; (defun fd (&optional &key a b (c 8) d)
;   (list a b c d))
; (defun fb (x &key add then-multiply-by)
  ; (* (+ x add) then-multiply-by))
; (defun f (n)
;   (labels ((g (x)
;             (if (< n x)
;               nil
;               (cons x (g (+ x 1))))))
;               (g 1)))
; (defun g (x)
;   (labels ((g2 (z)
;             (if (= z 0)
;               nil
;               (cons z (g2 (- z 1))))))
;               (rev (g2 x))))
; (defun fa (x)

;   (list (labels ((g (z) (+ z 12)))
;           (g x))
;         (labels ((g (z) (* z 12)))
;           (g x))))
; (defun fb (x)
;   (if x
;     (labels ((g (z) (+ z 2)))
;       (g 4))
;     (labels ((g (z) (* z 2)))
;       (g 4))))
; (defun diff (xs ys &optional (n 1))
;   (let ((a (first xs)) (b (first ys)))
;     (if (null xs)
;       nil
;       (cons (if (equal a b)
;                 n (cons a b))
;             (diff
;               (rest xs) (rest ys) (+ n 1))
;               ))))
; (defun fa (n)
;   (g 1 n))

; (defun g (x n)
;   (if (< n x)
;     nil
;     (cons x (g (+ x 1) n))))
; (defun fc (&optional a b (c 10) d)
;   (list a b c d))
; (defun f (&optional (x a))
;   x)
; (defun fb (n &optional (x 1))
;   (if (< n x)
;     nil
;     (cons x (fb n (+ x 1)))))
; ; (defun g (&optional (x (+ 2 3))) x)
; ; (defun fa (x &optional y)
; ;   (list x y))

; ; (defun fb (x &optional a b c)
; ;   (list x a b c))

; ; (defun g (x y &optional z)
; ;   (let ((xy (* x y)))
; ;     (if (null z)
; ;       xy
; ;       (+ xy z))))

; ; (defun fa (x &optional (y 10))
; ;   (+ x y))

; (defun fb (x &optional
;   (a 30) (b 20) (c 80))
;   (list x a b c))
