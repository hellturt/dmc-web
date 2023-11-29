<?php

require __DIR__ . "/vendor/autoload.php";

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();


?>
<!DOCTYPE html>

<html lang="en">

<head>
    <title>DMC FinCap :: Registration</title>
    <meta charset="utf-8" />
    <meta name="description" content="DMC FinCap :: Registration" />
    <meta name="keywords" content="DMC FinCap :: Registration" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter:300,400,500,600,700" />

    <link href="assets/plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/style.bundle.css" rel="stylesheet" type="text/css" />

    <script defer src="https://cdn.jsdelivr.net/npm/@imacrayon/alpine-ajax@0.3.0/dist/cdn.min.js"></script>
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.13.1/dist/cdn.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

    <style>
        .error-text {
            color: red;
            font-size: 12px;
        }

        .delete-icon {
            transform: rotateZ(45deg) scale(2);
            color: red;
            margin-left: 8px;
            cursor: pointer;
        }

        .f-row {
            display: flex;
            flex-direction: row;
            align-items: center;
        }

        .opacity-0 {
            opacity: 0;
        }

        .opacity-100 {
            opacity: 100;
        }
    </style>


</head>

<body id="kt_body" class="app-blank">

    <div class="d-flex flex-column flex-root" id="kt_app_root" x-data="data()" x-init="getEmploymentStatuses();getCompanies();select2Alpine()">
        <div class="d-flex flex-column flex-lg-row flex-column-fluid stepper stepper-pills stepper-column stepper-multistep" id="kt_create_account_stepper">
            <div class="d-flex flex-column flex-lg-row-auto w-lg-350px w-xl-500px">
                <div class="d-flex flex-column position-lg-fixed top-0 bottom-0 w-lg-350px w-xl-500px scroll-y bgi-size-cover bgi-position-center" style="background-color: #eaeaea">
                    <div class="d-flex flex-center py-10 py-lg-20 mt-lg-20">
                        <a href="../">
                            <img alt="Logo" src="assets/img/dmc-full.png" class="h-50px" />
                        </a>
                    </div>
                    <div class="d-flex flex-row-fluid justify-content-center p-10">
                        <div class="stepper-nav">
                            <div :class="{ 'current': current_step==0 }" class="stepper-item " data-kt-stepper-element="nav">
                                <div class="stepper-wrapper">
                                    <div class="stepper-icon rounded-3" style="background-color:#333399">
                                        <i class="ki-duotone ki-check fs-2 stepper-check"></i>
                                        <span class="stepper-number" style="color:#FFFFFF">1</span>
                                    </div>
                                    <div class="stepper-label" style="color:#000000">
                                        <h3 class="stepper-title fs-2" style="color:#000000">Maklumat Peribadi</h3>
                                        <div class="stepper-desc fw-normal" style="color:#000000">
                                            Isikan butiran peribadi anda.
                                        </div>
                                    </div>
                                </div>
                                <div class="stepper-line h-40px"></div>
                            </div>

                            <div :class="{ 'current': current_step==1 }" class="stepper-item" data-kt-stepper-element="nav">
                                <div class="stepper-wrapper">
                                    <div class="stepper-icon rounded-3" style="background-color:#333399">
                                        <i class="ki-duotone ki-check fs-2 stepper-check"></i>
                                        <span class="stepper-number">2</span>
                                    </div>

                                    <div class="stepper-label" style="color:#000000">
                                        <h3 class="stepper-title fs-2" style="color:#000000">Maklumat Pekerjaan</h3>
                                        <div class="stepper-desc fw-normal" style="color:#000000">
                                            Isikan butiran pekerjaan anda
                                        </div>
                                    </div>
                                </div>

                                <div class="stepper-line h-40px"></div>
                            </div>

                            <div :class="{ 'current': current_step==2 }" class="stepper-item" data-kt-stepper-element="nav">
                                <div class="stepper-wrapper">
                                    <div class="stepper-icon" style="background-color:#333399">
                                        <i class="ki-duotone ki-check fs-2 stepper-check"></i>
                                        <span class="stepper-number">3</span>
                                    </div>

                                    <div class="stepper-label" style="color:#000000">
                                        <h3 class="stepper-title fs-2" style="color:#000000">Maklumat Slip Gaji</h3>
                                        <div class="stepper-desc fw-normal" style="color:#000000">
                                            Masukkan maklumat slip gaji anda
                                        </div>
                                    </div>
                                </div>

                                <div class="stepper-line h-40px"></div>
                            </div>

                            <div :class="{ 'current': current_step==3 }" class="stepper-item" data-kt-stepper-element="nav">
                                <div class="stepper-wrapper">
                                    <div class="stepper-icon" style="background-color:#333399">
                                        <i class="ki-duotone ki-check fs-2 stepper-check"></i>
                                        <span class="stepper-number">4</span>
                                    </div>

                                    <div class="stepper-label" style="color:#000000">
                                        <h3 class="stepper-title" style="color:#000000">Terma & Penerimaan</h3>
                                        <div class="stepper-desc fw-normal" style="color:#000000">
                                            Baca PDPA dan T&C kami
                                        </div>
                                    </div>
                                </div>

                                <div class="stepper-line h-40px"></div>
                            </div>

                            <div :class="{ 'current': current_step==4}" class="stepper-item" data-kt-stepper-element="nav">
                                <div class="stepper-wrapper">
                                    <div class="stepper-icon" style="background-color:#333399">
                                        <i class="ki-duotone ki-check fs-2 stepper-check"></i>
                                        <span class="stepper-number">5</span>
                                    </div>

                                    <div class="stepper-label" style="color:#000000">
                                        <h3 class="stepper-title" style="color:#000000">CTOS & Laporan Kredit</h3>
                                        <div class="stepper-desc fw-normal" style="color:#000000">
                                            Sediakan pembayaran dan persetujuan anda
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="d-flex flex-center flex-wrap px-5 py-10">
                        <div class="d-flex fw-normal">
                            <a href="../contact.html" class="text-warning px-5" target="_blank">Hubungi Kami</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="d-flex flex-column flex-lg-row-fluid py-10">
                <div class="d-flex flex-center flex-column flex-column-fluid">
                    <div class="w-lg-650px w-xl-700px p-10 p-lg-15 mx-auto">

                        <form @submit.prevent="submit" class="my-auto pb-5" id="kt_create_account_form" novalidate>
                            <div :class="{ 'current': current_step==0 }" data-kt-stepper-element="content">
                                <div class="w-100">
                                    <div class="row gx-10 mb-5">
                                        <div class="col-lg-8">
                                            <h2 class="fw-bold d-flex align-items-center text-dark">
                                                Maklumat Peribadi
                                                <span class="ms-1" data-bs-toggle="tooltip" title="Fill in your personal details">
                                                    <i class="ki-duotone ki-information-5 text-gray-500 fs-6">
                                                        <span class="path1"></span>
                                                        <span class="path2"></span>
                                                        <span class="path3"></span>
                                                    </i>
                                                </span>
                                            </h2>
                                            <div class="text-muted fw-semibold fs-8">
                                                Isikan butiran peribadi anda.
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="text-muted fw-semibold fs-6">
                                                Kempen/Ejen/Kod Rujukan (jika ada)
                                            </div>
                                            <input x-model="formData.ref" name="agent_code" class="form-control form-control-lg form-control-solid" value="" style="background-color: #eeeeee" />
                                        </div>
                                    </div>
                                    <div class="fv-row mb-10">
                                        <label class="form-label required">Nama Penuh
                                            <span class="ms-1" data-bs-toggle="tooltip" title="Please enter your full name as per IC">
                                                <i class="ki-duotone ki-information-5 text-gray-500 fs-6">
                                                    <span class="path1"></span>
                                                    <span class="path2"></span>
                                                    <span class="path3"></span>
                                                </i>
                                            </span>
                                        </label>
                                        <input x-model="formData.name" class="form-control form-control-lg form-control-solid" value="" style="background-color: #eeeeee" />
                                        <div class="p-1 error-text" x-show="errors['name']">Sila masukkan nama penuh anda</div>

                                    </div>
                                    <div class="row gx-10 mb-5">
                                        <div class="col-lg-6">
                                            <label class="form-label fs-6 fw-bold text-gray-700 mb-3 required">NRIC
                                                <span class="ms-1" data-bs-toggle="tooltip" title="Please enter new IC number without dash '-'">
                                                    <i class="ki-duotone ki-information-5 text-gray-500 fs-6">
                                                        <span class="path1"></span>
                                                        <span class="path2"></span>
                                                        <span class="path3"></span>
                                                    </i>
                                                </span>
                                            </label>

                                            <div class="mb-5">
                                                <input x-model="formData.ic_number" type="number" max="12" class="form-control form-control-solid" placeholder="e.g: 781512115242" style="background-color: #eeeeee" />
                                                <div class="p-1 error-text" x-show="errors['ic_no']">Sila masukkan NRIC anda</div>
                                            </div>
                                        </div>

                                        <div class="col-lg-6">
                                            <label class="form-label fs-6 fw-bold text-gray-700 mb-3">IC lama / Polis / Tentera</label>
                                            <div class="mb-5">
                                                <input type="number" max="6" class="form-control form-control-solid" placeholder="e.g: 3006113" style="background-color: #eeeeee" />
                                            </div>

                                        </div>

                                    </div>
                                    <div class="row gx-10 mb-5">
                                        <div class="col-lg-6">
                                            <label class="form-label fs-6 fw-bold text-gray-700 mb-3 required">Nombor Telefon
                                                <span class="ms-1" data-bs-toggle="tooltip" title="Please enter phone number without dash '-'">
                                                    <i class="ki-duotone ki-information-5 text-gray-500 fs-6">
                                                        <span class="path1"></span>
                                                        <span class="path2"></span>
                                                        <span class="path3"></span>
                                                    </i>
                                                </span>
                                            </label>
                                            <div class="mb-5">
                                                <input x-model="formData.contact_number" type="text" class="form-control form-control-solid" placeholder="e.g: 0172492489" style="background-color: #eeeeee" />
                                                <div class="p-1 error-text" x-show="errors['contact_no']">Sila masukkan nombor telefon anda</div>
                                            </div>
                                        </div>

                                        <div class="col-lg-6">
                                            <label class="form-label fs-6 fw-bold text-gray-700 mb-3 required">Emel</label>
                                            <div class="mb-5">
                                                <input x-model="formData.email" type="email" class="form-control form-control-solid" placeholder="e.g: sample@gmail.com" style="background-color: #eeeeee" />
                                                <div class="p-1 error-text" x-show="errors['email']">Sila masukkan email anda</div>
                                            </div>
                                        </div>

                                    </div>

                                    <div class="fv-row mb-10">
                                        <label class="form-label required">Alamat</label>
                                        <input x-model="formData.address" class="form-control form-control-lg form-control-solid" value="" style="background-color: #eeeeee" placeholder="e.g: No. 11, Jalan Melawati 3/5, Taman Melawati" />
                                        <div class="p-1 error-text" x-show="errors['address']">Sila masukkan alamat anda</div>

                                    </div>

                                    <div class="row gx-10 mb-5">
                                        <div class="col-lg-4">
                                            <label class="form-label fs-6 fw-bold text-gray-700 mb-3 required">Poskod</label>
                                            <div class="mb-5">
                                                <input name="postcode" @input.debounce="getCityState($event)" type="text" class="form-control form-control-solid" placeholder="e.g: 53100" style="background-color: #eeeeee" />
                                                <div class="p-1 error-text" x-show="errors['postcode']">Sila masukkan poskod/ poskod anda tidak tepat</div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <label class="form-label fs-6 fw-bold text-gray-700 mb-3 required ">Bandar</label>
                                            <div class="mb-5">
                                                <input x-model="city_name" type="text" class="form-control form-control-solid" placeholder="e.g: Ampang Jaya" style="background-color: #eeeeee" readonly />
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <label class="form-label fs-6 fw-bold text-gray-700 mb-3 required">Negeri</label>
                                            <div class="mb-5">
                                                <input x-model="state" type="text" class="form-control form-control-solid" placeholder="e.g: W.P. Kuala Lumpur" style="background-color: #eeeeee" readonly />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div :class="{ 'current': current_step==1 }" data-kt-stepper-element="content">
                                <div class="w-100">
                                    <div class="pb-10 pb-lg-15">
                                        <h2 class="fw-bold text-dark">Maklumat Pekerjaan</h2>

                                        <div class="text-muted fw-semibold fs-6">
                                            Isikan butiran pekerjaan anda.
                                        </div>
                                    </div>

                                    <div class="fv-row mb-10">
                                        <label class="form-label required">Status Pekerjaan</label>

                                        <select x-ref="employment_status_select" aria-label="Select" data-control="select2" data-placeholder="Sila pilih..." class="form-select form-select-solid form-select-lg" style="background-color: #eeeeee">
                                            <option value=""> </option>
                                            <template x-on:change="alert('s')" x-for="employment_status in employment_statuses">
                                                <option :value="employment_status.id" x-text="employment_status.name"></option>
                                            </template>
                                        </select>
                                        <div class="p-1 error-text" x-show="errors['contract']">Sila pilih status pekerjaan anda</div>
                                    </div>
                                    <div class="fv-row mb-10">
                                        <label class="form-label required">Nama Majikan</label>

                                        <select x-ref="company_select" aria-label="Select" data-control="select2" data-placeholder="Sila pilih..." class="form-select form-select-solid form-select-lg" style="background-color: #eeeeee">
                                            <option value=""> </option>
                                            <template x-for="company in companies">
                                                <option :value="company.id" x-text="company.name"></option>
                                            </template>
                                        </select>
                                        <div class="p-1 error-text" x-show="errors['company_id']">Sila pilih majikan anda.</div>
                                    </div>
                                    <div class="fv-row mb-10">
                                        <label class="form-label required">Lampiran Slip Gaji</label>
                                        <div class="form-group" @click="$refs.fileupload.click()">
                                            <div class="fv-row mb-2">
                                                <div class="dropzone" id="kt_ecommerce_add_product_media">
                                                    <div class="dz-message needsclick">
                                                        <i class="ki-duotone ki-file-up text-primary fs-3x">
                                                            <span class="path1"></span>
                                                            <span class="path2"></span>
                                                        </i>

                                                        <div class="ms-4">
                                                            <h3 x-show="file_name == ''" class="fs-5 fw-bold text-gray-900 mb-1">
                                                                Tekan di sini untuk memuat naik fail.
                                                            </h3>
                                                            <h3 x-show="file_name != ''" class="fs-5 fw-bold text-gray-900 mb-1" x-text="file_name"> </h3>
                                                            <span class="fs-7 fw-semibold text-gray-400">Muat naik slip gaji terkini</span>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>

                                            <span class="form-text fs-6 text-muted">Maksimum saiz fail adalah 5MB..</span>
                                        </div>
                                        <div class="p-1 error-text" x-show="errors['attachment_size']">Maksimum saiz fail adalah 5MB.</div>

                                        <div class="p-1 error-text" x-show="errors['attachment']">Sila muat naik slip gaji anda.</div>

                                        <div class="p-1 error-text" x-show="errors['attachment_pdf']">Sila muat naik .pdf sahaja.</div>





                                    </div>

                                    <input x-ref="fileupload" type="file" style="display: none;" @change="upload($refs.fileupload)">
                                </div>
                            </div>

                            <div :class="{ 'current': current_step==2 }" data-kt-stepper-element="content">
                                <div class="w-100">
                                    <div class="pb-10 pb-lg-12">
                                        <h2 class="fw-bold text-dark">Maklumat Slip Gaji</h2>

                                        <div class="text-muted fw-semibold fs-6">
                                            Masukan maklumat slip gaji anda
                                        </div>
                                    </div>
                                    <div class="row gx-10 mb-10">
                                        <h2 class="fw-bold text-dark">Pendapatan</h2>
                                        <br />

                                        <div class="col-lg-6">
                                            <label class="form-label fs-6 fw-bold text-gray-700 mb-3">Penerangan Pendapatan</label>
                                            <template x-for="(field, index) in income_fields" :key="index">
                                                <div class="mb-5">
                                                    <input x-model="field.income_desc" name="income_desc[]" type="text" class="form-control form-control-solid" placeholder="e.g. Basic salary" style="background-color: #eeeeee" />
                                                    <div :class="{ 'opacity-100': errors[`income_${index}_income_desc`] }" class="p-1 error-text opacity-0">Sila masukkan penerangan pendapatan</div>

                                                </div>
                                            </template>
                                        </div>

                                        <div class="col-lg-5">
                                            <label class="form-label fs-6 fw-bold text-gray-700 mb-3">Jumlah</label>
                                            <template x-for="(field, index) in income_fields" :key="index">
                                                <div class="mb-5">
                                                    <div class="f-row">
                                                        <input step="any" @input="recalc('income')" x-model="field.income_amount" name="income_amount[]" type="number" class="form-control form-control-solid" placeholder="Jumlah" style="background-color: #eeeeee" />
                                                        <i class="ki-duotone ki-plus fs-2 delete-icon" x-show="index>0" @click="removeField('income',index)"></i>
                                                    </div>
                                                    <div :class="{ 'opacity-100': errors[`income_${index}_income_amount`] }" class="p-1 error-text opacity-0">Sila masukkan jumlah</div>
                                                </div>
                                            </template>
                                        </div>

                                        <div class="form-group mt-0">
                                            <button type="button" data-repeater-create="" class="btn btn-sm btn-light-primary" id="AddIncome" @click="addNewField('income')">
                                                <i class="ki-duotone ki-plus fs-2"></i>Tambah Lagi
                                            </button>
                                        </div>
                                    </div>
                                    <div class="row gx-10 mb-5">
                                        <h2 class="fw-bold text-dark">Potongan</h2>
                                        <br />

                                        <div class="col-lg-6">
                                            <label class="form-label fs-6 fw-bold text-gray-700 mb-3">Penerangan Potongan</label>
                                            <template x-for="(field, index) in deduction_fields" :key="index">
                                                <div class="mb-5">
                                                    <input x-model="field.deduction_desc" name="deduction_desc[]" type="text" class="form-control form-control-solid" placeholder="e.g. KWSP" style="background-color: #eeeeee" />
                                                    <div :class="{ 'opacity-100': errors[`deduction_${index}_deduction_desc`] }" class="p-1 error-text opacity-0">Sila masukkan penerangan pemotongan</div>
                                                </div>
                                            </template>
                                            <div id="deductDescDiv"></div>

                                        </div>

                                        <div class="col-lg-5">
                                            <label class="form-label fs-6 fw-bold text-gray-700 mb-3">Jumlah</label>

                                            <template x-for="(field, index) in deduction_fields" :key="index">
                                                <div class="mb-5">
                                                    <div class=" f-row">
                                                        <input step="any" @input="recalc('deduction')" x-model="field.deduction_amount" name="deduction_amount[]" type="number" class="form-control form-control-solid" placeholder="Jumlah" style="background-color: #eeeeee" />
                                                        <i class="ki-duotone ki-plus fs-2 delete-icon" x-show="index>0" @click="removeField('deduction',index)"></i>
                                                    </div>
                                                    <div :class="{ 'opacity-100': errors[`deduction_${index}_deduction_amount`] }" class="p-1 error-text opacity-0">Sila masukkan jumlah</div>

                                                </div>
                                            </template>

                                            <div id="deductAmtDiv"></div>

                                        </div>
                                        <div class="form-group mt-1">
                                            <button type="button" data-repeater-create="" class="btn btn-sm btn-light-primary" id="AddDeduction" @click="addNewField('deduction')">
                                                <i class="ki-duotone ki-plus fs-2"></i>Tambah Lagi
                                            </button>

                                            <div class="card-body pt-0">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row gx-10 pt-5 mb-10">
                                        <table>
                                            <tfoot>
                                                <tr class="border-top border-top-dashed align-top fs-6 fw-bold text-gray-700">
                                                    <th></th>
                                                    <th colspan="2" class="border-bottom border-bottom-dashed ps-0">
                                                        <div class="d-flex flex-column align-items-start">
                                                            <div class="fs-5">Jumlah Pendapatan</div>
                                                        </div>
                                                    </th>
                                                    <th colspan="2" class="border-bottom border-bottom-dashed text-end">
                                                        $ <span x-text="parseFloat(total_income.toFixed(2) ).toLocaleString()"></span>
                                                    </th>
                                                </tr>
                                                <tr class="border-top border-top-dashed align-top fs-6 fw-bold text-gray-700">
                                                    <th></th>
                                                    <th colspan="2" class="border-bottom border-bottom-dashed ps-0">
                                                        <div class="d-flex flex-column align-items-start">
                                                            <div class="fs-5">Jumlah Potongan</div>
                                                        </div>
                                                    </th>
                                                    <th colspan="2" class="border-bottom border-bottom-dashed text-end">
                                                        $ <span x-text=" parseFloat(total_deduction.toFixed(2) ).toLocaleString() ">0.00</span>
                                                    </th>
                                                </tr>
                                                <tr class="align-top fw-bold text-gray-700">
                                                    <th></th>
                                                    <th colspan="2" class="fs-4 ps-0">Jumlah</th>
                                                    <th colspan="2" class="text-end fs-4 text-nowrap">
                                                        $ <span x-text="parseFloat(net_income.toFixed(2) ).toLocaleString()  ">0.00</span>
                                                    </th>
                                                </tr>
                                            </tfoot>
                                        </table>
                                    </div>

                                </div>
                            </div>

                            <div :class="{ 'current': current_step==3 }" data-kt-stepper-element="content">
                                <div class="w-100">
                                    <div class="pb-10 pb-lg-15">
                                        <h2 class="fw-bold text-dark">Terma & Penerimaan</h2>


                                        <div class="text-muted fw-semibold fs-6">
                                            Baca PDPA dan T&C kami.
                                        </div>
                                    </div>
                                    <div class="card mb-5 mb-xl-10">
                                        <div class="card-body py-7">
                                            <div class="scroll-y me-n7 pe-7" data-kt-element="messages" data-kt-scroll="true" data-kt-scroll-activate="true" data-kt-scroll-height="500px" data-kt-scroll-dependencies="#kt_drawer_chat_messenger_header, #kt_drawer_chat_messenger_footer" data-kt-scroll-wrappers="#kt_drawer_chat_messenger_body" data-kt-scroll-offset="0px">

                                                <p class="fs-5 fw-semibold text-gray-600 py-6" style="text-align: justify">
                                                    Menurut Akta Agensi Pelaporan Kredit (CRA) 2010 dan
                                                    Akta Bank Negara Malaysia 2009, saya/kami yang
                                                    bertandatangan di bawah dengan ini memberikan
                                                    kebenaran saya/kami kepada anda, CTOS Data System
                                                    Sdn Bhd (“CTOS”), dan RAM Credit Information Sdn Bhd
                                                    (“RAMCI”), kedua-duanya agensi pelaporan kredit
                                                    berdaftar di bawah Akta CRA untuk memproses data
                                                    peribadi syarikat saya/kami.
                                                    <br />
                                                    <br />
                                                    Dengan persetujuan ini, saya/kami memahami dan
                                                    bersetuju bahawa:- Anda boleh menjalankan semakan
                                                    kredit/dagangan, semakan CCRIS dan DCHEQS ke atas
                                                    saya/kami dan jika berkenaan dengan CTOS dan RAMCI
                                                    pada bila-bila masa selagi saya/kami mempunyai
                                                    hubungan perdagangan dengan anda atau sebarang
                                                    jumlah masih belum dibayar dan tertunggak dengan
                                                    anda, untuk sebarang satu atau lebih daripada tujuan
                                                    berikut:
                                                </p>
                                                <ul style="list-style-type: none; text-align: justify" class="fs-5 fw-semibold text-gray-600 py-1 pt-0">
                                                    <li>a. Pembukaan akaun</li>
                                                    <li>b. Pemantauan kredit/Akaun</li>
                                                    <li>c. Pemulihan hutang</li>
                                                    <li>d. Penilaian kredit/Akaun</li>
                                                    <li>e. Semakan kredit/Akaun</li>
                                                    <li>
                                                        f. Dokumentasi undang-undang akibat kontrak atau
                                                        kemudahan yang diberikan oleh anda.
                                                    </li>
                                                </ul>

                                                <p class="fs-5 fw-semibold text-gray-600 py-6" style="text-align: justify">
                                                    Anda boleh mendedahkan sebarang maklumat mengenai
                                                    kelakuan saya/kami terhadap akaun saya/kami dengan
                                                    anda, kepada mana-mana entiti perniagaan untuk
                                                    semakan perdagangan yang bona fide pada bila-bila
                                                    masa. Saya/Kami juga sedar dan faham bahawa maklumat
                                                    tersebut akan diberikan kepada CTOS dan RAMCI, yang
                                                    mungkin akan berkongsi maklumat tersebut kepada
                                                    perkhidmatan pelanggan mereka.
                                                    <br /><br />
                                                    Jika anda memerlukan sebarang pemprosesan permohonan
                                                    saya/kami untuk diproses oleh mana-mana pusat
                                                    pemprosesan yang terletak di luar Malaysia (termasuk
                                                    Ibu Pejabat), saya/kami dengan ini memberi kebenaran
                                                    kepada CTOS dan RAMCI untuk mendedahkan kredit
                                                    saya/kami, laporan CCRIS & DCHEQS ke lokasi tersebut
                                                    luar Malaysia. <br /><br />
                                                    Selain daripada perkara di atas, saya/kami yang
                                                    bertandatangan di bawah memberikan kebenaran
                                                    saya/kami kepada anda dan CTOS dan RAMCI, untuk
                                                    memproses data peribadi saya/kami mengikut PDPA
                                                    <br /><br />
                                                    <b>AKTA PERLINDUNGAN DATA PERIBADI 2010 (PDPA) </b>
                                                    <br /><br />
                                                    Selaras dengan penguatkuasaan PDPA pada 15 November
                                                    2013, DMC Fincap Sdn Bhd komited untuk mematuhi
                                                    semua peruntukan PDPA yang bertujuan melindungi data
                                                    peribadi anda. Mengikut peruntukan di bawah PDPA DMC
                                                    Fincap Sdn Bhd perlu mendapatkan persetujuan anda
                                                    apabila mengumpul dan memproses data peribadi anda.
                                                    Sila ambil maklum, makluma berkenaan adalah penting
                                                    untuk DMC Fincap Sdn Bhd menilai permohonanan anda
                                                    sebelum permohonan anda diproses ke peringkat
                                                    selanjutnya. Maklumat berkenaan juga dapat membantu
                                                    DMC Fincap Sdn Bhd meningkatkan perkhidmatan.
                                                    <br /><br />
                                                    <b>Memproses Data</b><br />
                                                    Data peribadi anda boleh diproses oleh DMC Fincap
                                                    Sdn Bhd dan/atau ejen sah DMC Fincap Sdn Bhd untuk
                                                    tujuan berikut;
                                                </p>
                                                <ul style="list-style-type: none; text-align: justify" class="fs-5 fw-semibold text-gray-600 py-1 pt-0">
                                                    <li>i. Berkomunikasi dengan anda</li>
                                                    <li>
                                                        ii. Menyediakan perkhidmatan kepada anda termasuk
                                                        anak syarikat DMC Fincap Sdn Bhd (jika ada)
                                                    </li>
                                                    <li>
                                                        iii. Menilai permohonan anda bagi apa-apa produk
                                                        DMC Fincap Sdn Bhd;
                                                    </li>
                                                    <li>iv. Memproses apa-apa transaksi pembayaran</li>
                                                    <li>
                                                        v. Mengurus dan mengekalkan akaun dan kemudahan
                                                    </li>
                                                    <li>
                                                        vi. Mengesahkan kedudukan kewangan menerusi
                                                        pemeriksaan rujukaan kredit
                                                    </li>
                                                    <li>
                                                        vii. Menjawab pertanyaan dan aduan anda serta
                                                        menyelesaikan pertikaian secara am
                                                    </li>
                                                    <li>
                                                        viii. Menguruskan pembabitan anda dalam sebarang
                                                        peraduan dan/atau kempen
                                                    </li>
                                                    <li>ix. Melaksanakan aktiviti dalaman</li>
                                                    <li>
                                                        x. Melakukan kaji selidik pasaran dan analisis
                                                        bagi meningkatkan produk dan perkhidmatan DMC
                                                        Fincap Sdn Bhd
                                                    </li>
                                                    <li>
                                                        xi. Memenuhi keperluan pihak berkuasa/keperluan
                                                        perundangan atau mana-mana Undang-undang
                                                    </li>
                                                    <li>xii. Menguruskan faedah dan manfaat anda</li>
                                                    <li>
                                                        xiii. Menguruskan pembayaran dermasiswa, kematian
                                                        atau takaful yang berkaitan
                                                    </li>
                                                </ul>
                                                <p class="fs-5 fw-semibold text-gray-600 py-6" style="text-align: justify">
                                                    <b>PENGAKUAN PEMOHON </b>
                                                </p>
                                                <ul style="list-style-type: none; text-align: justify" class="fs-5 fw-semibold text-gray-600 py-1 pt-0">
                                                    <li>
                                                        1. Maklumat yang diberikan di dalam borang
                                                        permohonan atau dokumen- dokumen lain adalah benar
                                                        tanpa menyembunyikan maklumat yang mungkin
                                                        mempengaruhi saya.
                                                    </li>
                                                    <li>
                                                        2. Saya bukanlah seorang yang muflis seperti yang
                                                        tertakluk di bawah Seksyen 3 Akta Kebankrapan
                                                        1967. Saya akan memaklumkan kepada pihak Syarikat
                                                        dalam tempoh 24 jam sekiranya saya berada dalam
                                                        proses kebankrapan.
                                                    </li>
                                                    <li>
                                                        3. Saya dengan ini memberi kuasa kepada pihak DMC
                                                        Fincap Sdn Bhd untuk mendapatkan dan mengesahkan
                                                        maklumat tentang saya daripada majikan saya,
                                                        mana-mana Institusi Kewangan, Lembaga Hasil Dalam
                                                        Negeri,Central Credit Reference Information System
                                                        (CCRIS), CTOS Data System Sdn Bhd (CTOS), RAM
                                                        Credit Information Sdn Bhd (RAMCI), dan daripada
                                                        mana- mana sumber yang difikirkan sesuai, untuk
                                                        apa sahaja maklumat yang diperlukan oleh Pihak DMC
                                                        Fincap Sdn Bhd.
                                                    </li>
                                                    <li>
                                                        4. Saya dengan ini besetuju bahawa sebarang pembayaran bagi tujuan yang dinyatakan di perenggan 3 tersebut adalah tidak boleh dikembalikan kepada saya sekirannya permohonan saya tidak berjaya.
                                                    </li>
                                                    <li>
                                                        5. Saya mengakui bahawa pihak syarikat DMC Fincap
                                                        Sdn Bhd mempunyai hak mutlak untuk melulus,
                                                        menolak atau tidak menerima pemohonan saya tanpa
                                                        memberikan sebarang sebab.
                                                    </li>
                                                    <li>
                                                        6. Saya faham dan akui bahawa pihak DMC Fincap Sdn
                                                        Bhd berhak untuk menukar, mengubah, menambah atau
                                                        mengeluarkan mana-mana bahagian dari Terma dan
                                                        Syarat yang digunakan pada bila-bila masa tanpa
                                                        sebarang notis atau sebarang sebab sekalipun.
                                                    </li>
                                                    <li>
                                                        7. Saya dengan ini bersetuju dengan semua terma
                                                        dan syarat yang ditetapkan oleh pihak Syarikat DMC
                                                        Fincap Sdn Bhd.
                                                    </li>
                                                </ul>

                                                <p class="fs-5 fw-semibold text-gray-600 py-2" style="text-align: justify">
                                                    <b>Penzahiran Data Peribadi</b>
                                                    <br />
                                                    <br />
                                                    Adalah dimaklumkan dalam sebarang situasi dan jika
                                                    diperlukan ketika melaksanakan tujuan-tujuan yang
                                                    dinyatakan di atas, DMC Fincap Sdn Bhd boleh
                                                    menzahirkan maklumat peribadi anda kepada pihak
                                                    berikut:
                                                </p>
                                                <ul style="list-style-type: none; text-align: justify" class="fs-5 fw-semibold text-gray-600 py-1 pt-0">
                                                    <li>
                                                        i. Mana-mana organisasi yang dilantik untuk
                                                        berkhidmat sebagai ejen DMC Fincap Sdn Bhd;
                                                    </li>
                                                    <li>
                                                        ii. Mana-mana organisasi untuk melengkapkan
                                                        transaksi yang diminta oleh anda;
                                                    </li>
                                                    <li>
                                                        iii. Mana-mana penyedia perkhidmatan kewangan yang
                                                        di minta oleh anda;
                                                    </li>
                                                    <li>
                                                        iv. Mana-mana penyedia perkhidmatan DMC Fincap Sdn
                                                        Bhd;
                                                    </li>
                                                    <li>
                                                        v. Mana-mana pihak yang dilantik DMC Fincap Sdn
                                                        Bhd;
                                                    </li>
                                                    <li>vi. Anak-anak syarikat DMC Fincap Sdn Bhd;</li>
                                                    <li>vii. Penasihat professional;</li>
                                                    <li>
                                                        viii. Mana-mana pihak yang memberi jaminan atas
                                                        pemohonan anda;
                                                    </li>
                                                    <li>
                                                        ix. Mana-mana pihak yang membenarkan di dalam
                                                        peruntukan Undang-Undang, ketetapan makhamah atau
                                                        pihak berkuasa;
                                                    </li>
                                                    <li>
                                                        x. Mana-mana agensi/syarikat pelaporan kredit yang
                                                        berkhidmat dengan kami;
                                                    </li>
                                                    <li>
                                                        xi. Agensi penguatkuasaan atau pengawalseliaan
                                                    </li>
                                                </ul>
                                                <p class="fs-5 fw-semibold text-gray-600 py-2" style="text-align: justify">
                                                    Dengan menandatangani borang ini, saya/kami
                                                    mengesahkan bahawa:-
                                                </p>
                                                <ul style="list-style-type: none; text-align: justify" class="fs-5 fw-semibold text-gray-600 py-1 pt-0">
                                                    <li>
                                                        i. Saya/kami bersetuju untuk tertakluk di bawah
                                                        nota privasi di atas;
                                                    </li>
                                                    <li>
                                                        ii. Saya/kami dengan ini bersetuju memberi
                                                        persetujuan secara nyata (“explicit consent”)
                                                        kepada DMC Fincap Sdn Bhd untuk mengumpul,
                                                        memproses dan/atau menzahirkan data peribadi saya
                                                        (termasuk data sensitif) seperti di dalam Nota
                                                        Privasi;
                                                    </li>
                                                    <li>
                                                        iii. Data peribadi yang diberikan oleh saya/kami
                                                        adalah tepat, lengkap, terkini dan benar.
                                                    </li>
                                                    <li>
                                                        iv. Saya/Kami berjanji akan memaklumkan kepada DMC
                                                        Fincap Sdn Bhd secepat mungkin jika terdapat
                                                        perubahan data peribadi saya/kami.
                                                    </li>
                                                    <li>
                                                        v. Pada masa tertentu DMC Fincap Sdn Bhd mungkin
                                                        akan menghantar apa-apa bentuk promosi dan
                                                        pemasaran yang mungkin menarik minat anda.
                                                    </li>
                                                </ul>
                                                <p class="fs-5 fw-semibold text-gray-600 py-2" style="text-align: justify">
                                                    Saya/kami dengan ini faham dan bersetuju dengan
                                                    segala terma dan syarat yang dinyatakan di atas.
                                                </p>


                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-check form-check-solid fv-row">
                                        <input x-bind:disabled="loading" x-model="is_agreed" name="deactivate" class="form-check-input" type="checkbox" value="" id="deactivate" />
                                        <label class="form-check-label fw-bold ps-2 fs-6" for="deactivate">Saya setuju dengan syarat tersebut</label>
                                    </div>

                                </div>
                            </div>

                            <div :class="{ 'current': current_step==4 }" data-kt-stepper-element="content">
                                <div class="w-100">

                                    <div class="card h-lg-100" style="
                        background: linear-gradient(
                          112.14deg,
                          #ff8a00 0%,
                          #e96922 100%
                        );
                      ">

                                        <div class="col-sm-12 pe-0 mb-5 mb-sm-0">
                                            <div class="d-flex justify-content-between h-100 flex-column pt-xl-5 pb-xl-2 ps-xl-7">
                                                <div class="mb-7">
                                                    <div class="mb-6">
                                                        <h3 class="fs-2x fw-semibold text-white">
                                                            Beli Laporan Kredit Anda
                                                        </h3>
                                                        <span class="fw-semibold text-white opacity-75">Untuk meneruskan pemprosesan permohonan anda, sila lengkapkan proses pembayaran supaya kami boleh mendapatkan CTOS dan Laporan Kredit anda. Setelah pembayaran dibuat, kami akan meneruskan bahagian proses kami.</span>
                                                    </div>

                                                    <div class="d-flex align-items-center flex-wrap d-grid gap-2">
                                                        <div class="d-flex align-items-center me-5 me-xl-13">
                                                            <div class="symbol symbol-30px symbol-circle me-3">
                                                                <span class="symbol-label" style="
                                      background: rgba(255, 255, 255, 0.15);
                                    ">
                                                                    <i class="ki-duotone ki-abstract-41 fs-4 text-white">
                                                                        <span class="path1"></span>
                                                                        <span class="path2"></span>
                                                                    </i>
                                                                </span>
                                                            </div>

                                                            <div class="m-0">
                                                                <a href="#" class="text-white text-opacity-75 fs-8">Jumlah</a>
                                                                <span class="fw-bold text-white fs-7 d-block">RM 20.00</span>
                                                            </div>
                                                        </div>

                                                        <div class="d-flex align-items-center">
                                                            <div class="symbol symbol-30px symbol-circle me-3">
                                                                <span class="symbol-label" style="
                                      background: rgba(255, 255, 255, 0.15);
                                    ">
                                                                    <i class="ki-duotone ki-abstract-26 fs-4 text-white">
                                                                        <span class="path1"></span>
                                                                        <span class="path2"></span>
                                                                    </i>
                                                                </span>
                                                            </div>

                                                            <div class="m-0">
                                                                <a href="#" class="text-white text-opacity-75 fs-8">Apa yang anda akan dapat</a>
                                                                <span class="fw-bold text-white fs-7 d-block">CTOS,CCRIS,etc</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="m-0">
                                                    <a x-bind:href="'payment.php?id=' + id" class="btn btn-color-white bg-white bg-opacity-15 bg-hover-opacity-25 fw-semibold">Teruskan ke pembayaran</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                </div>
                                                <br /><br />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="d-flex flex-stack pt-15">
                                <div class="mr-2">
                                    <button x-show="(current_step > 0 && current_step <= 3 && !loading)" type="button" class="btn btn-lg btn-light-primary me-3" @click="current_step=current_step-1" x-show="current_step>0">
                                        <i class="ki-duotone ki-arrow-left fs-4 me-1">
                                            <span class="path1"></span>
                                            <span class="path2"></span> </i>Sebelumnya
                                    </button>
                                </div>
                                <div>

                                    <button type="button" x-show="current_step <= 2" class="btn btn-lg btn-primary" @click="proceed()">
                                        Teruskan
                                        <i class="ki-duotone ki-arrow-right fs-4 ms-1">
                                            <span class="path1"></span>
                                            <span class="path2"></span>
                                        </i>
                                    </button>

                                    <button data-bs-toggle="modal" data-bs-target="#modal-confirmation" type="button" x-show="current_step == 3" class="btn btn-lg btn-primary disabled:opacity-50" x-bind:disabled="!is_agreed || loading" x-text="loading?'Submitting...':'Hantar & Teruskan Pembayaran'">
                                        <i class="ki-duotone ki-arrow-right fs-4 ms-1">
                                            <span class="path1"></span>
                                            <span class="path2"></span>
                                        </i>
                                    </button>


                                </div>
                            </div>
                            <div class="modal fade" id="modal-confirmation" tabindex="-1">
                                <div class="modal-dialog modal-dialog-centered modal-md">
                                    <div class="modal-content text-center">
                                        <div class="modal-body">

                                            <h3>Teruskan permohonan anda</h3>
                                            <p class="mb-6">
                                                Dengan mengklik butang ini, permohonan anda akan dihantar, dan anda akan dialihkan ke pembayaran.</p>
                                            <div class="newsletter-wrapper">
                                                <div class="row">
                                                    <div class="col-md-10 offset-md-1">
                                                        <!-- Begin Mailchimp Signup Form -->
                                                        <div id="mc_embed_signup">
                                                            <button data-bs-dismiss="modal" type="submit" class="btn btn-lg btn-primary disabled:opacity-50" x-bind:disabled="!is_agreed || loading" x-text="loading?'Submitting...':'Hantar & Teruskan Pembayaran'">
                                                                <i class="ki-duotone ki-arrow-right fs-4 ms-1">
                                                                    <span class="path1"></span>
                                                                    <span class="path2"></span>
                                                                </i>
                                                            </button>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>



    <script src="assets/plugins/global/plugins.bundle.js"></script>
    <script src="assets/js/scripts.bundle.js"></script>

    <script src="assets/js/custom/utilities/modals/create-account.js"></script>

    <script>
        const HOST_NAME = "<?php echo $_ENV['SERVER_ENDPOINT']; ?>";

        function data() {
            return {
                id: null,
                formData: {
                    ref: '',
                    name: '',
                    ic_number: '',
                    contact_number: "",
                    email: "",
                    postcode: "",
                    company_id: '',
                    contract: '',
                    loan_amount: 0,
                    address: '',
                    payslips: [{
                        attachment: null,
                    }]

                },
                loading: false,
                ref: '',
                city_name: '',
                state: '',
                file_name: '',
                current_step: 0,
                total_income: 0,
                total_deduction: 0,
                net_income: 0,
                employment_statuses: null,
                companies: null,
                postcode: '',
                errors: {},
                is_agreed: false,
                income_fields: [{
                    income_desc: '',
                    income_amount: ''
                }],
                deduction_fields: [{
                    deduction_desc: '',
                    deduction_amount: ''
                }],
                attachment: null,
                proceed() {
                    this.errors = {}
                    if (this.current_step == 0) {
                        if (this.formData.name == '') this.errors['name'] = true;
                        if (this.formData.ic_number == '') this.errors['ic_no'] = true;
                        if (this.formData.contact_number == '') this.errors['contact_no'] = true;
                        if (this.formData.email == '') this.errors['email'] = true;
                        if (this.formData.address == '') this.errors['address'] = true;
                        if (this.formData.postcode == '') this.errors['postcode'] = true;
                    }
                    if (this.current_step == 1) {
                        if (this.formData.contract == '') this.errors['contract'] = true;
                        if (this.formData.company_id == '') this.errors['company_id'] = true;
                        if (this.attachment == null) this.errors['attachment'] = true;
                    }
                    if (this.current_step == 2) {
                        this.income_fields.forEach((x, i) => {
                            if (x['income_desc'] == '') this.errors[`income_${i}_income_desc`] = true
                            if (x['income_amount'] == '') this.errors[`income_${i}_income_amount`] = true
                        })
                        this.deduction_fields.forEach((x, i) => {
                            if (x['deduction_desc'] == '') this.errors[`deduction_${i}_deduction_desc`] = true
                            if (x['deduction_amount'] == '') this.errors[`deduction_${i}_deduction_amount`] = true
                        })
                    }

                    if (Object.entries(this.errors).length > 0) return;
                    this.current_step = this.current_step + 1
                },

                removeField(type, index) {
                    if (type == 'income') {
                        this.income_fields.splice(index, 1);
                    }
                    if (type == 'deduction') {
                        this.deduction_fields.splice(index, 1);
                    }
                    this.recalc(type);

                },
                addNewField(type) {
                    if (type == 'income') {
                        this.income_fields.push({
                            income_desc: '',
                            income_amount: ''
                        });
                    }
                    if (type == 'deduction') {
                        this.deduction_fields.push({
                            deduction_desc: '',
                            deduction_amount: ''
                        });
                    }
                },
                recalc(type) {
                    if (type == 'income') {
                        let t = 0;
                        this.income_fields.forEach(element => {
                            if (element.income_amount != '')
                                t += parseFloat(element.income_amount)
                        });
                        this.total_income = t
                    }
                    if (type == 'deduction') {
                        let t = 0;
                        this.deduction_fields.forEach(element => {
                            if (element.deduction_amount != '')
                                t += parseFloat(element.deduction_amount)
                        });
                        this.total_deduction = t
                    }
                    this.net_income = this.total_income - this.total_deduction

                },
                getCityState(event) {
                    this.formData.postcode = ''
                    fetch(`${HOST_NAME}/api/getCityAndStateByPostcode?code=${event.target.value}`)
                        .then(response => {
                            return response.json()
                        })
                        .then(data => {
                            if (!data) return
                            if (data.length == 0) return
                            let x = data[0]
                            this.formData.postcode = event.target.value
                            this.city_name = x['city']['name']
                            this.state = x['state']['name']
                        })
                },
                getEmploymentStatuses() {
                    fetch(`${HOST_NAME}/api/employmentStatus`)
                        .then(response => {
                            return response.json()
                        })
                        .then(data => {
                            if (!data) return
                            var result = [];
                            for (var i in data)
                                result.push({
                                    name: i,
                                    id: data[i]
                                });
                            this.employment_statuses = result
                        })
                },
                getCompanies() {
                    fetch(`${HOST_NAME}/api/companies`)
                        .then(response => {
                            return response.json()
                        })
                        .then(data => {
                            if (!data || data.length == 0) return
                            var result = [];
                            for (var i in data)
                                result.push({
                                    id: i,
                                    name: data[i]
                                });
                            this.companies = result
                        })
                },
                select2Alpine() {
                    this.employment_status_select = $(this.$refs.employment_status_select).select2();
                    this.employment_status_select.on("select2:select", (event) => {
                        this.formData.contract = event.target.value
                    });

                    this.company_select = $(this.$refs.company_select).select2();
                    this.company_select.on("select2:select", (event) => {
                        this.formData.company_id = event.target.value
                    });

                },
                dropzone() {
                    new Dropzone("#dropzone", {
                        'headers': {
                            'X-CSRF-TOKEN': '{{ csrf_token() }}'
                        },
                        init() {
                            this.on("complete", () => {
                                document.dispatchEvent(new CustomEvent('upload'));
                            });
                        },
                        url: '{{ $store }}'
                    });
                },
                upload(ref) {


                    let formData = new FormData();
                    let file = ref.files[0]
                    let fileSize = file.size;
                    let fileType = file.type;

                    this.attachment = null;
                    this.errors['attachment_size'] = false
                    this.errors['attachment'] = false
                    this.errors['attachment_pdf'] = false



                    if (fileSize > 5000000) {
                        this.errors['attachment_size'] = true
                        return;
                    }
                    if (fileType !== 'application/pdf') {
                        this.errors['attachment_pdf'] = true
                        return;
                    }
                    this.file_name = ref.files[0].name;
                    this.attachment = file

                },
                submit() {

                    let income = []
                    let deduction = []
                    this.income_fields.forEach((x, i) => {
                        income.push({
                            "item": x['income_desc'],
                            "amount": x["income_amount"]
                        })
                    })
                    this.deduction_fields.forEach((x, i) => {
                        deduction.push({
                            "item": x['deduction_desc'],
                            "amount": x["deduction_amount"]
                        })
                    })

                    let file = this.attachment

                    delete this.formData.payslips;


                    // this.formData.payslips = JSON.stringify([{
                    //     "income": income,
                    //     "deduction": deduction,
                    //     "for_month": null,
                    //     "attachment": this.formData.payslips[0].attachment
                    // }])

                    this.loading = true
                    var f = new FormData()
                    for (var key in this.formData) {
                        if (this, this.formData.hasOwnProperty(key)) {
                            f.append(key, this.formData[key]);
                        }
                    }
                    // Create a new Date object
                    var currentDate = new Date();

                    // Get the year, month, and day components
                    var year = currentDate.getFullYear();
                    var month = (currentDate.getMonth() + 1).toString().padStart(2, '0'); // Months are zero-indexed
                    var day = currentDate.getDate().toString().padStart(2, '0');
                    var formattedDate = year + '-' + month + '-' + day;


                    f.append('payslips[0][for_month]', formattedDate);

                    f.append('payslips[0][attachment]', file);
                    income.forEach((x, i) => {
                        f.append(`payslips[0][income][${i}][item]`, x['item']);
                        f.append(`payslips[0][income][${i}][amount]`, x['amount']);
                    });
                    deduction.forEach((x, i) => {
                        f.append(`payslips[0][deduction][${i}][item]`, x['item']);
                        f.append(`payslips[0][deduction][${i}][amount]`, x['amount']);
                    });


                    fetch(`${HOST_NAME}/api/applications`, {
                            method: "POST",
                            headers: {
                                "DMC-API-Key": "<?php echo $_ENV['DMC_API_Key']; ?>",
                                "Accept": "application/json"
                            },
                            body: f,
                        })
                        .then(response => {


                            if (!response.ok && response.status != 422) {
                                alert("Unexpected Error occured.")
                                return;
                            }
                            return response.json()
                        })
                        .then(data => {

                            if (data.hasOwnProperty("errors")) {
                                this.loading = false

                                alert(data.message)
                                return;
                            }


                            this.current_step = this.current_step + 1
                            this.loading = false
                            this.id = data['id']

                        })
                        .catch(() => {
                            this.loading = false
                        });
                },
            }


        }
    </script>


    <script src="../assets/js/plugins.js"></script>
    <script src="../assets/js/theme.js"></script>
</body>

</html>