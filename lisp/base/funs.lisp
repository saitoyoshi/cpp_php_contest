(defun len (xs)
  (if (null xs)
    0
    (+ 1 (len (rest xs)))))

(defun join-2 (xs ys)
  (if (null xs)
      ys
      (cons (first xs)
            (join-2 (rest xs) ys))))
(defun join (&rest xs)
  (if (null xs)
    nil
    (join-2 (first xs)
            (apply #'join (rest xs)))))
(defun rev (xs)
  (if (null (rest xs))
    xs
    (join (rev (rest xs))
          (cons (first xs) nil))))

(defun dup (x n)
  (if (= n 0)
    nil
    (cons x (dup x (- n 1)))))

(defun a-seq (a b n)
  (if (= n 0)
    nil
    (cons a (a-seq (+ a b) b (- n 1)))))

(defun _and (xs)
  (if (null (rest xs))
    (first xs)
    (and (first xs)
        (_and (rest xs)))))

(defun _or (xs)
  (if (null (rest xs))
    (first xs)
    (or (first xs)
      (_or (rest xs)))))

(defun thru (f xs)
  (cond ((null xs)
          nil)
        ((funcall f (first xs))
          (cons (first xs)
                (thru f (rest xs))))
        (t
          (thru f (rest xs)))))

(defun number-satisfy (f xs)
  (len (thru f xs)))

(defun exist (f xs)
  (< 0 (number-satisfy f xs)))

(defun _max (f xs)
  (cond ((null (rest xs))
          (first xs))
        ((funcall
          f (first xs) (_max f (rest xs)))
          (_max f (rest xs)))
        (t
          (first xs))))

(defun skip (n xs)
  (if (= n 0) xs (skip (- n 1) (rest xs))))

(defun take (n xs)
  (if (= n 0) nil (cons (first xs) (take (- n 1) (rest xs)))))

(defun slice (m n xs)
  (take (+ n (- m) 1) (skip (- m 1) xs)))

(defun len< (xs ys)
  (if (and xs ys) (len< (rest xs) (rest ys)) ys))

(defun len<= (xs ys)
  (if (and xs ys) (len<= (rest xs) (rest ys)) (not xs)))

(defun join* (&rest xs)
  (apply #'join
    (mapcar #'(lambda (x)
      (if (atom x)
          (cons x nil)
          x))
          xs)))
(defun _flat (x)
  (if (atom x) x (flat x)))

(defun flat (xs)
  (apply #'join* (mapcar #'_flat xs)))

(defun flat* (&rest xs) (flat xs))

(defun q-sort (f xs)
  (if (null xs) nil (let ((u (thru #'(lambda (x) (funcall f (first xs) x)) (rest xs)))
    (d (thru #'(lambda (x) (not (funcall f (first xs) x))) (rest xs))))
    (join (q-sort f d) (cons (first xs) nil) (q-sort f u)))))
(defun n-th (n xs)
  (first (skip (- n 1) xs)))
(defun change-element (a n xs)
  (join (take (- n 1 xs) (cons a (skip n xs)))))
(defun swap (m n xs)
  (let ((a (n-th m xs)) (b (n-th n xs)))
  (change-element b m (change-element a n xs))))
(defun rand (a b)
  (let ((-a (- a)))
    (cond ((= a b) a)
    ((< b a) (rand b a))
    ((or (floatp a) (floatp b)) (+ (float a) (random (- (float b) (float a)))))
    (t (+ a (random (+ b -a 1)))))))
