(defun join* (&rest xs)
  (apply #'join (mapcar #'(lambda (x) (if (atom x) (cons x nil) x)) xs)))

(defun integral-0-5 (f)
  (apply #'+ (mapcar #'* (mapcar f '(0 1 2 3 4 5)) '(1/2 1 1 1 1 1 1/2))))

(defun _flat (x)
  (if (atom x) x (flat x)))

(defun flat (xs)
  (apply #'join* (mapcar #'_flat xs)))

(defun flat* (&rest xs) (flat xs))
