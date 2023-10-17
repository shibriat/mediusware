@extends('adminlte::master')


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>AdminLTE 3 | Registration Page</title>

    <script nonce="219e3942-acd8-4587-8714-8c876c74d95c">
        (function(w, d) {
            ! function(t, u, v, w) {
                t[v] = t[v] || {};
                t[v].executed = [];
                t.zaraz = {
                    deferred: [],
                    listeners: []
                };
                t.zaraz.q = [];
                t.zaraz._f = function(x) {
                    return async function() {
                        var y = Array.prototype.slice.call(arguments);
                        t.zaraz.q.push({
                            m: x,
                            a: y
                        })
                    }
                };
                for (const z of ["track", "set", "debug"]) t.zaraz[z] = t.zaraz._f(z);
                t.zaraz.init = () => {
                    var A = u.getElementsByTagName(w)[0],
                        B = u.createElement(w),
                        C = u.getElementsByTagName("title")[0];
                    C && (t[v].t = u.getElementsByTagName("title")[0].text);
                    t[v].x = Math.random();
                    t[v].w = t.screen.width;
                    t[v].h = t.screen.height;
                    t[v].j = t.innerHeight;
                    t[v].e = t.innerWidth;
                    t[v].l = t.location.href;
                    t[v].r = u.referrer;
                    t[v].k = t.screen.colorDepth;
                    t[v].n = u.characterSet;
                    t[v].o = (new Date).getTimezoneOffset();
                    if (t.dataLayer)
                        for (const G of Object.entries(Object.entries(dataLayer).reduce(((H, I) => ({
                                ...H[1],
                                ...I[1]
                            })), {}))) zaraz.set(G[0], G[1], {
                            scope: "page"
                        });
                    t[v].q = [];
                    for (; t.zaraz.q.length;) {
                        const J = t.zaraz.q.shift();
                        t[v].q.push(J)
                    }
                    B.defer = !0;
                    for (const K of [localStorage, sessionStorage]) Object.keys(K || {}).filter((M => M.startsWith(
                        "_zaraz_"))).forEach((L => {
                        try {
                            t[v]["z_" + L.slice(7)] = JSON.parse(K.getItem(L))
                        } catch {
                            t[v]["z_" + L.slice(7)] = K.getItem(L)
                        }
                    }));
                    B.referrerPolicy = "origin";
                    B.src = "/cdn-cgi/zaraz/s.js?z=" + btoa(encodeURIComponent(JSON.stringify(t[v])));
                    A.parentNode.insertBefore(B, A)
                };
                ["complete", "interactive"].includes(u.readyState) ? zaraz.init() : t.addEventListener(
                    "DOMContentLoaded", zaraz.init)
            }(w, d, "zarazData", "script");
        })(window, document);
    </script>
</head>

<body class="hold-transition register-page">
    <div class="register-box">
        <div class="register-logo">
            <a href="../../index2.html"><b>Admin</b>LTE</a>
        </div>
        <div class="card">
            <div class="card-body register-card-body">
                <p class="login-box-msg">Register a new membership</p>
                <form action="{{ route('register') }}" method="post">
                    @csrf

                    <div class="input-group mb-3">
                        <input type="text" class="form-control" name="name" placeholder="Full name">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-user"></span>
                            </div>
                        </div>
                    </div>

                    <div class="input-group mb-3">
                        <input type="email" class="form-control" name="email" placeholder="Email">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-envelope"></span>
                            </div>
                        </div>
                    </div>

                    <div class="input-group mb-3">
                        <select name="account_type" class="form-control">
                            <option value="" disabled selected>Select Account Type</option>
                            <option value="Individual">Individual</option>
                            <option value="Business">Business</option>
                        </select>
                    </div>

                    <div class="input-group mb-3">
                        <input type="number" step="0.01" class="form-control" name="balance" value="0" placeholder="Balance">
                    </div>

                    <div class="input-group mb-3">
                        <input type="password" class="form-control" name="password" placeholder="Password">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-lock"></span>
                            </div>
                        </div>
                    </div>

                    <div class="input-group mb-3">
                        <input type="password" class="form-control" name="password_confirmation" placeholder="Retype password">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-lock"></span>
                            </div>
                        </div>
                    </div>

                    {{-- <div class="row">
                        <div class="col-8">
                            <div class="icheck-primary">
                                <input type="checkbox" id="agreeTerms" name="terms" value="agree">
                                <label for="agreeTerms">
                                    I agree to the <a href="#">terms</a>
                                </label>
                            </div>
                        </div> --}}

                        <div class="col-4">
                            <button type="submit" class="btn btn-primary btn-block">Register</button>
                        </div>
                    </div>
                </form>
                <a href="{{ route('login') }}" class="text-center">I already have a membership</a>
            </div>

        </div>
    </div>
</body>

</html>
