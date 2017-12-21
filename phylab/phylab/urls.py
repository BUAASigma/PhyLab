# -*- coding: utf-8 -*-

from __future__ import unicode_literals

from django.conf.urls import include, url
from django.conf import settings
from django.conf.urls.static import static
from django.contrib import admin

import spirit.urls
import report.urls
import report.views
import tool.urls
import problem.urls

# Override admin login for security purposes
from django.contrib.auth.decorators import login_required
admin.site.login = login_required(admin.site.login)

from django.contrib.auth import views as auth


urlpatterns = [
    url(r'^$', report.views.index, name='index'),
    url(r'^logout/$', auth.LogoutView.as_view(next_page='/'), name='logout'),
    url(r'^report/', include(report.urls)),
    url(r'^tool/', include(tool.urls)),
    url(r'^spirit/', include(spirit.urls)),
    url(r'^problem/', include(problem.urls)),

    # Examples:
    # url(r'^$', 'example.views.home', name='home'),
    # url(r'^example/', include('example.foo.urls')),

    # Uncomment the admin/doc line below to enable admin documentation:
    # url(r'^admin/doc/', include('django.contrib.admindocs.urls')),

    # Uncomment the next line to enable the admin:
    url(r'^admin/', include(admin.site.urls)),
]

if settings.DEBUG:
    import debug_toolbar
    urlpatterns = [
        url(r'^__debug__/', include(debug_toolbar.urls)),
    ] + urlpatterns
    urlpatterns += static(settings.MEDIA_URL, document_root=settings.MEDIA_ROOT)